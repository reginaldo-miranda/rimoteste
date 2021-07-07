@extends('layout')

{{-- <div class="scrolling-pagination"> --}}

<style>
    .p {

       /*  border:solid 1px #000000;
       width:600px;
       height:400px;
       overflow:auto;*/
        background: rgb(230, 230, 230);
        width: 500px;
        height: 380px;
        overflow-y: auto;
       /* overflow-x: hidden; */
    }

</style>


<div class="p">

    <table id="tabelavenda" class="table table-striped table-hover table-bordered">
       
    {{--     <tbody>
            @foreach ($produtos as $post)
                <tr>
                    
                    <td>{{ $post->id_venda }}</td> 
                    <td>{{ $post->id_cliente }}</td> 
                    <td>{{ $post->id_produto }}</td>
                    <td>{{ $post->qde }}</td>
                    <td>{{ $post->descricao }}</td>
                    <td>{{ $post->valorunit }}</td>
                    <td>{{ $post->status }}</td>
                    <td>
                        <button wire:click="edit({{ $post->id }})" class="btn btn-primary" id="btntabela">
                            Editar
                        </button>
                    </td>
                    <td>
                        <button wire:click="destruir({{ $post->id }})" class="btn btn-danger" id="btntabela">
                            Deletar
                        </button>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
         --}}
    </table>
</div>

{{-- https://pt.khanacademy.org/computing/computer-programming/html-css/css-layout-properties/pt/css-box-model // scroll




<script type = "text / javascript" > 
    window.onscroll = function (ev) {
    if ((window.innerHeight + window.scrollY)> = document.tbody.offsetHeight) {
    window.livewire.emit ('carregar mais');
    }
    };

</script> 



<div class="container">

   {{ $prod_id }} {{$descricao}} {{ $pvenda }}
  

</div>

$browser->scrollIntoView('.selector')
        ->click('.selector'); // scroll 
        
        
          <script type = "text / javascript" > 
         window.onscroll = function (ev) {
         if ((window.innerHeight + window.scrollY)> = document.body.offsetHeight) {
         window.livewire.emit ('carregar mais');
         }
         };
      </script>
        
        ------------------------------------------------------
class ArticleList extends Component
{
    public $perPage = 10;

    public function render()
    {
        $articles = Article::paginate($this->perPage);

        return view('livewire.article-list', [
            'articles' => $articles
        ]);
    }
}

<div>
    @foreach ($articles as $article)
        <div class="mb-6">
            <h1 class="text-xl">#{{ $article->id }} {{ $article->title }}</h1>
            <p>{{ $article->teaser }}</p>
        </div>
    @endforeach
</div>


        https://www.positronx.io/build-onscroll-load-more-in-laravel-with-livewire-package/  outro modelo de scroll 
--}}
