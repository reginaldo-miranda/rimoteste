<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pdvcomponent extends Component
{
    public function mount($id){

     $busca = produto::find($id);

     return view('livewire.pdvcomponent')->layout('pdv');

    }

    public function render()
    {

        return view('livewire.pdvcomponent');
    }
}



