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
     public $view ='formpdv';

    public $searchprod1;

    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public function render()
    {
       
      /*  
                
        $searchprod1 = '%'. $this->searchprod1 .'%';
        $produtos = produto::where('descricao', 'LIKE', $searchprod1)
                            ->orWhere('id', 'LIKE' ,$searchprod1) 
                            ->orWhere('grupo', 'LIKE', $searchprod1)  
                            ->orderby('id','desc')->paginate(4);
        /*   $produtos = produto::orderby('id','desc')->paginate(4); */
        
                 
           return view('livewire.pdvcomponent');
    }
     
      

    public function buscar(){
     
        $searchprod1 = '%' . $this->searchprod1 . '%';
        $produtos = produto::where('descricao', 'LIKE', $searchprod1)
            ->orWhere('id', 'LIKE', $searchprod1)
            ->orWhere('grupo', 'LIKE', $searchprod1)
            ->orderby('id', 'desc')->paginate(4);
        /*   $produtos = produto::orderby('id','desc')->paginate(4); */

      /* return view('livewire.pdvcomponent', ['produtos' => $produtos]);
       /* return view('livewire.formpdv', ['produtos' => $produtos]); */
        $this->view = 'livewire.formpdv' ['produtos => $_FILESprodutos'];    
    }

 
}



