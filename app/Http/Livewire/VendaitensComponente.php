<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\vendasitens;

class VendaitensComponente extends Component
{
    public function render()
    {
        $venda = vendasitens::all()
        dd($venda);
        return view('livewire.vendaitens-componente');
    }
}
