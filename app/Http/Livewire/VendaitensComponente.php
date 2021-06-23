<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\vendasitens;
use App\models\produto;
use App\models\vendas;
use App\Http\Livewire\document;
use App\Http\Livewire\produtos;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
//use App\Http\Livewire\DB;
use Livewire\WithPagination;


class VendaitensComponente extends Component
{

    public $prod_id, $descricao, $grupo, $pvenda, $buscapdv, $id_venda ;
    public $view ='formpdv';
    public $cliente = 1, $qde=2, $valortotal=100, $status, $status_ap, $fechado = 2;
    public $post;

   
    public function render()
    {
      //  $produtos = vendasitens::get();
        $produtos = DB::table('vendasitens')
        ->join('produtos', 'produtos.id', '=', 'produtos.id')
        ->where('status', '=' , 1)
        ->select('vendasitens.*','produtos.descricao')->get();
      
        return view('livewire.vendaitens-componente',['produtos'=> $produtos]);
    }

    public function edit($id){

    
        $produtos = produto::find($id);
         
        
        $this->prod_id   = $produtos->id;
        $this->descricao = $produtos->descricao;
        $this->grupo     = $produtos->grupo;
        $this->pvenda    = $produtos->pvenda;
      

        $vendaitens = vendasitens::create([
            
            'id_cliente' =>$this->cliente,
            'id_produto' =>$this->prod_id,
            'qde'        => $this->qde,
            'valorunit'  => $this->pvenda,
           
          ]);
          $this->prod_id = '';
        //  $this->view = 'pdvbusca';
       // dd($produtos);
       // return view('livewire.pdvvenda', ['produtos' => $produtos]); 
       // return redirect('livewire.formpdv');
       // return back()->withInput();
    }
    public function abrir($status_ap){
        
 
        $vendapdv = vendas::create([
           // 'id_cliente' =>$this->cliente,
           // 'valor_total'=>$this->valortotal,
            'status'     =>$status_ap
                                
        ]);
      
    }
   
   public function destruir($id){
    vendasitens::destroy($id);
   }

   public function fecharvenda($id){
    
    //  $this->validate(['descricao' => 'required', 'grupo'=>'required', 'pvenda'=>'required']);

    /*  $post = vendasitens::find($id)->all();
      //dd($post);
      $post->update([
        'status'=>$this->fechado
      
      ]);

      /*   foreach  ($request->clientes as $id_key => $dados) {
        Cliente::where(['id' => $id_key])->update($dados);
    }*/

    DB::update("update vendasitens SET STATUS = 2 WHERE id_cliente = 1");

   /* $produtos = DB::table('vendasitens')
    ->join('produtos', 'produtos.id', '=', 'produtos.id')
    ->where('status', '=' , 1)
    ->select('vendasitens.*','produtos.descricao')->get();*/
    // return view('livewire.vendaitens-componente',['produtos'=> $produtos]);
    return view('livewire.vendaitens-componente');

   }

}




/*

$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get(); */

     