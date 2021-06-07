<h5>venda</h5>
<div class="container">
<table class="table">
 
  
   @foreach($produtos as $post)
   <tr>
       <td>{{ $post->id }}</td>
       <td>{{ $post->descricao }}</td>
       <td>{{ $post->grupo }}</td>
       <td>{{ $post->pvenda }}</td>
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


 </tbody>
</table>  
</div>
 {{-- 
<div class="container">

   {{ $prod_id }} {{$descricao}} {{ $pvenda }}
  

</div>--}}