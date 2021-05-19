<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\produto;
use App\Http\Livewire\produtos;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;

class ProdutoComponent extends Component
{

    protected $paginationTheme = 'bootstrap';
    use WithPagination;
   
    public $prod_id, $descricao, $grupo, $pvenda;
    public $searchprod, $prod;
    public $view ='createProd';
    public function render()
    {
     
      

      $searchprod = '%'. $this->searchprod .'%';

      $produtos = produto::where('descricao', 'LIKE', $searchprod)
                          ->orWhere('grupo', 'LIKE', $searchprod)  
                          ->orderby('id','desc')->paginate(4);

     /*   $produtos = produto::orderby('id','desc')->paginate(4); */
    

        return view('livewire.produto-component',['produtos'=> $produtos]);
        
    }  


    public function destroy($id){

        produto::destroy($id);
    }

    public function store(){
        $this->validate(['descricao' => 'required', 'grupo'=>'required', 'pvenda'=>'required']);
        $post = produto::create([

            'descricao' => $this->descricao,
            'grupo' => $this->grupo,
            'pvenda' => $this->pvenda
        ]);
        $this->edit($post->id);
    }

    public function edit($id){

        $post = produto::find($id);

        $this->prod_id   = $post->id;
        $this->descricao = $post->descricao;
        $this->grupo     = $post->grupo;
        $this->pvenda    = $post->pvenda;
        $this->view = 'editProd';

    }
    public function default(){
        $this->descricao = '';
        $this->grupo     = '';
        $this->pvenda    = '';
        $this->view      = 'createProd';
    }

    
    public function update(){

        $this->validate(['descricao' => 'required', 'grupo'=>'required', 'pvenda'=>'required']);

        $post = produto::find($this->prod_id);
        $post->update([
            'descricao' => $this->descricao,
            'grupo'     => $this->grupo,
            'pvenda'    => $this->pvenda
        ]);
            $this->default();
    }
}


