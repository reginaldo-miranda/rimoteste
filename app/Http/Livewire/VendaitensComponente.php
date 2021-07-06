<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\produto;
use App\models\vendas;
use App\models\vendasitens;
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
    public $cliente = 1, $qde=2, $valortotal=100, $status = 1, $fechado = 2;
    public $post,$vendapdv,$vendab, $totalvenda, $vlrvenda, $id_cliente;

   
    public function render()
    {
        //$produtos = vendasitens::get();
        $produtos = DB::table('vendasitens')
               
        ->select('vendasitens.*','produtos.descricao')
        ->join('produtos', 'produtos.id', '=', 'vendasitens.id_produto')->where('status', '=' , 1)->get();

         return view('livewire.vendaitens-componente',['produtos'=> $produtos]);  
        // dd($produtos);
     }

    public function edit($id){

    
        $produtos = produto::find($id);
         
        
        $this->prod_id   = $produtos->id;
        $this->descricao = $produtos->descricao;
        $this->grupo     = $produtos->grupo;
        $this->pvenda    = $produtos->pvenda;
        $this->gravar();
      //  return view('livewire.vendaitens-componente',['produtos'=> $produtos]); 
    }

    public function gravar(){
        $vendaitens = vendasitens::create([
            
            'id_cliente' =>$this->cliente,
            'id_produto' =>$this->prod_id,
            'qde'        => $this->qde,
            'valorunit'  => $this->pvenda,
            'status'     =>$this->status
           
          ]);
          $vendaitens->refresh();
          $this->prod_id = '';
          //  $this->getfocus(id);va
          //  $this->view = 'pdvbusca';
          //  return back()->withInput();
          $totalvenda  = DB::select("SELECT SUM(qde * valorunit)
          FROM vendasitens WHERE status = 1;");
        //  dd($totalvenda);
          
        return view('livewire.vendaitens-componente',['vendaitens'=> $totalvenda]); 
    }

    public function abrir(){
        
       $status = 1;
        
       $vendapdv = vendas::create([
           // 'id_cliente' =>$this->cliente,
           // 'valor_total'=>$this->valortotal,
          'status' =>$status
                       
      ]);

     // dd($vendapdv);
      //return view('livewire.pdv_form',['vendas' => $vendapdv]); 
    }
    
   
   public function destruir($id){

    vendasitens::destroy($id);

   }

   public function fecharvenda(){
     
  
  $produtos =  DB::update("update vendasitens SET STATUS = 2 WHERE id_cliente = 1");

 /*   $produtos = DB::table('vendasitens')
      ->join('produtos', 'produtos.id', '=', 'produtos.id')
      ->where('status', '=' , 1)
      ->select('vendasitens.*','produtos.descricao')->get();
      return view('livewire.vendaitens-componente',['produtos'=> $produtos]);
      return view('livewire.vendaitens-componente');
     /<script>
      $("#botaoabir").show();
      </script>   */
     
   } 

   public function default(){
      // $this->nome = '';
      // $this->fone = '';
      // $this->view = ('livewire.vendaitens-componente');
     return 'estou na cancela';
   }

   public function checar(){

     $produtos = DB::table('vendasitens')->where('status', '=' , 1)->get();
     $status = 1;
     $this->abrir($status);
     // document.getElementById('botaoabir').style.display = 'none';
     //  document.getElementById('idDoBotao').style.display = 'inline';
    
     return view('livewire.pdv_form',['vendasitens'=> $produtos]);  
   }



}




/*
 exemplo de join
 
  $users = DB::table('users')
        ->join('contacts', 'users.id', '=', 'contacts.user_id')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.*', 'contacts.phone', 'orders.price')
        ->get();
*/

     