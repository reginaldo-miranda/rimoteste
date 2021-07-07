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
    public $vendab, $id_cliente;
/*
    public function mount($id_cliente){

        $this->id_cliente = $id_cliente;
    
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
       // dd($vendab);
        // return view('livewire.venda-componente');
        // return view('livewire.pdv_form',['vendas' => $venda]); 
 
      // return view('livewire.venda-componente',['vendas' => $vendab]);
     
    return view('livewire.venda-componente',['vendas' => $vendab]);
    
    }
    
 /*
    public function abrir(){
        
        $status = 1;
         
        $venda = vendas::create([
            // 'id_cliente' =>$this->cliente,
            // 'valor_total'=>$this->valortotal,
           'status' =>$status
                        
       ]);
 
      // dd($vendapdv);
       //return view('livewire.pdv_form',['vendas' => $vendapdv]); 
     }
     */
}
