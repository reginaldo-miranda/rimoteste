<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\post;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;



class PostComponent extends Component
{
   
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public $post_id, $nome, $fone;
    public $view ='create';

    public function render()
    {
        
        return view('livewire.post-component',[
            'posts' => Post::orderBy('id','desc')->paginate(7)
        ]);
    }

    public function store(){
        $this->validate(['nome' => 'required', 'fone'=>'required']);
        $post = Post::create([

            'nome' => $this->nome,
            'fone' => $this->fone
        ]);
        $this->edit($post->id);
    }
    public function destroy($id){
        Post::destroy($id);
    }

    public function edit($id){

        $post = Post::find($id);

        $this->post_id = $post->id;
        $this->nome = $post->nome;
        $this->fone = $post->fone;
        $this->view = 'edit';

    }

    public function default(){
        $this->nome = '';
        $this->fone = '';
        $this->view = 'create';
    }

    public function update(){

        $this->validate(['nome' => 'required', 'fone'=>'required']);

        $post = Post::find($this->post_id);
        $post->update([
            'nome' => $this->nome,
            'fone' => $this->fone
        ]);
            $this->default();
    }
}
