<h5>venda</h5>
<div class="scrolling-pagination">
<table class="table">
 
  
   @foreach($produtos as $post)
   <tr>
    
       <td>{{ $post->id_venda }}</td>
       <td>{{ $post->id_cliente }}</td>
       <td>{{ $post->id_produto }}</td>
       <td>{{ $post->qde }}</td>
       <td>{{ $post->valorunit }}</td>
       <td>
           <button wire:click="edit({{ $post->id }})"class="btn btn-primary btn-sm">
               Editar
           </button>
       </td>
       <td>
         <button wire:click="destroy({{ $post->id }})" class="btn btn-danger btn-sm">
             Deletar
         </button>
     </td>
   </tr>
     
  @endforeach
  <div
    x-data="{
        observe () {
            let observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        @this.call('loadMore')
                    }
                })
            }, {
                root: null
            })

            observer.observe(this.$el)
        }
    }"
    x-init="observe"
>
</div>


 </tbody>
</table>  

<script type = "text / javascript" > 
    window.onscroll = function (ev) {
    if ((window.innerHeight + window.scrollY)> = document.tbody.offsetHeight) {
    window.livewire.emit ('carregar mais');
    }
    };
 </script> 

</div>
 {{-- 
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






        ----------------------------------------------------

        https://www.positronx.io/build-onscroll-load-more-in-laravel-with-livewire-package/  outro modelo de scroll
        --}}