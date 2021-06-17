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

    public $prod_id, $descricao, $grupo, $pvenda, $buscapdv ;
    public $view ='formpdv';
    public $cliente = 1, $qde=2, $valortotal=100, $status, $status_ap;

   
    public function render()
    {
      //  $produtos = vendasitens::get();
        $produtos = DB::table('vendasitens')
        ->join('produtos', 'produtos.id', '=', 'produtos.id')
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

}




/*

$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get(); */

     