<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\vendas;
class VendaComponente extends Component
{   
   

    public $venda = "venda do pdv";

    public function mount(){

        $this->$venda = 'venda do pdv mount';
        
    }



    public function render()
    {
        return view('livewire.venda-componente');
    }

    public function abrir(){

      return 'aqui na venda';
    }
}
