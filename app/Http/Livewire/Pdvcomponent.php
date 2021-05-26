<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\produto;
use App\Http\Livewire\produtos;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;


//use Livewire\Component;

class Pdvcomponent extends Component
{
    public $prod_id, $descricao, $grupo, $pvenda, $buscapdv;

    public function mount($id){

     $buscapdv = produto::find($id);

     return " aqui achei "; //view('livewire.pdvcomponent')->layout('pdv');*/

    }

    public function render()
    {


        $searchprod = '%'. $this->searchprod .'%';
        $produtos = produto::where('descricao', 'LIKE', $searchprod)
                             ->orWhere('grupo', 'LIKE', $searchprod)  
                             ->orderby('id','desc')->paginate(4);
        /*   $produtos = produto::orderby('id','desc')->paginate(4); */
        return view('livewire.pdvcomponent',['produtos'=> $produtos]);


       /* return view('livewire.pdvcomponent'); */
    }

    public function buscar(){

        return 'achei aqui';
    }
}



