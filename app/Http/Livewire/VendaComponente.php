<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\vendas;
use App\models\produto;
use App\models\vendasitens;
use App\Http\Livewire\document;
use App\Http\Livewire\produtos;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
//use App\Http\Livewire\DB;
use Livewire\WithPagination;

class VendaComponente extends Component
{    
    public $vendab, $id_cliente, $prod_id, $nome = 'jose';

    public $descricao, $grupo, $pvenda, $buscapdv, $id_venda ;
    public $view ='formpdv';
    public $cliente = 1, $qde=2, $valortotal=100, $status = 1, $fechado = 2;

    public $post;

 
/*
    public function mount($nometeste){

      $this->nometeste = $nometeste;

       // $this->venda = venda::find($id_cliente);
        // $venda = DB::table('vendas')->get();
        // $vendab = vendas::get();
        // dd($venda);
        // return view('livewire.venda-componente');
        // return view('livewire.pdv_form',['vendas' => $venda]); 
        // return view('livewire.venda-componente',['vendas' => $vendab]);
       
    }
    
*/


    public function render()
    {
          
        // $venda = DB::table('vendas')->get();
        $vendab = vendas::get();
        //dd($vendab);
        // return view('livewire.venda-componente');
        // return view('livewire.pdv_form',['vendas' => $venda]); 
        // return view('livewire.venda-componente',['vendas' => $vendab]);
     
    return view('livewire.venda-componente',['vendas' => $vendab]);
    
    }
    
 
    public function abrir(){
        
        $status = 1;
         
        $venda = vendas::create([
            // 'id_cliente' =>$this->cliente,
            // 'valor_total'=>$this->valortotal,
           'statusvenda'=>$status,
                        
       ]);
 
      // dd($vendapdv);
       //return view('livewire.pdv_form',['vendas' => $vendapdv]); 
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
        //  $totalvenda  = DB::select("SELECT SUM(qde * valorunit)
         // FROM vendasitens WHERE status = 1;");
         //dd($totalvenda);
          
        //return view('livewire.vendaitens-componente',['vendaitens'=> $totalvenda]); 
    }
     
}
