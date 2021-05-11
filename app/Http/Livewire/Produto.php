<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\produto;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;

class Produto extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $descricao, $grupo, $pvenda;

    public function render()
    {
        return view('livewire.produto',[
            'produtos' => produtos::orderBy('id','desc')->paginate(7)
        ]);
        
    }
}
