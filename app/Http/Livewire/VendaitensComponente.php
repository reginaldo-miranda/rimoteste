<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\vendasitens;
use App\models\produto;
use App\Http\Livewire\produtos;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;


class VendaitensComponente extends Component
{

    public $prod_id, $descricao, $grupo, $pvenda, $buscapdv ;
    public $view ='formpdv';
    public $cliente = 1, $qde=2;

    public $limitPerPage = 10;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];
   
    public function loadMore()
    {
        $this->limitPerPage = $this->limitPerPage + 6;
    }



    public function render()
    {
        $produtos = vendasitens::get();
           
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
            'valorunit'  => $this->pvenda
          ]);
          $this->prod_id = '';
        //  $this->view = 'pdvbusca';
       // dd($produtos);
       // return view('livewire.pdvvenda', ['produtos' => $produtos]); 
       // return redirect('livewire.formpdv');
       // return back()->withInput();
    }
}
