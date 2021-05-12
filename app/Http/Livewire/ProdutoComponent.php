<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\produto;

class ProdutoComponent extends Component
{
    public function render()
    {
        return view('livewire.produto-component',[
         
            'produtos' => produto::orderby('id','desc')->paginate()

        ]);


        
    }
}


