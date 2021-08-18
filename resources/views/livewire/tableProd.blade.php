<table class="table">
    <thead>
        <tr>
            <th>codigo</th>
            <th>descricao</th>
            <th>grupo</th>
            <th>preco</th>
            <th colspan="2"&nbsp;></th>
        </tr>
    </thead>
    <tbody>
    {{-- @livewire('produto-component')  --}}
     @foreach($produtos as $post)
      <tr>
        
            <td>{{ $post->id }}</td>
            <td>{{ $post->descricao }}</td>
            <td>{{ $post->grupo }}</td>
           {{--  <td>{{ $post->pvenda }}</td> --}}
           <td>{{ number_format($post->pvenda, 2, ',', '.') }}</td>
          
         {{--  

         <td>@livewire('produto-component ', ['produto' => $prod_id ])</td>  
         <td>@livewire('produto-component ', ['produto' => $descricao ])</td>   
         <td>@livewire('produto-component ', ['produto' => $grupo ])</td>  
         <td>@livewire('produto-component ', ['produto' => $pvenda ])</td>   --}}


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


 {{ $produtos->links() }}  

 