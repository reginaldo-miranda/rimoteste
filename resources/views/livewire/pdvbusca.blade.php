<div>
  
    <h1>Itens</h1>
 {{-- 
@foreach($produtos as $pesquisa) {{--  // $key => $value) 

    @if(count($produtos) == 1)
                
       <textarea id="areavenda" row="100" cols="80" name="areavenda">
            {{$pesquisa->descricao}}  {{$pesquisa->pvenda}}
        
       </textarea>
 
     @else      
        
     @endif
@endforeach --}} 

 @foreach($produtos as $post)

 @if(count($produtos) == 1)
      <tr>
           <td>{{ $post->id }}</td>
           <td>{{ $post->descricao }}</td>
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
   @endif     
     @endforeach


</div>
   