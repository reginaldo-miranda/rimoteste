
<h2>lista de Posts</h2>

<table class="table">
    <thead>
        <tr>
            <th>codigo</th>
            <th>nome</th>
            <th>Fone</th>
            <th colspan="2"&nbsp;></th>
        </tr>
    </thead>
    <tbody>
     @foreach($posts as $post)
      <tr>
          <td>{{ $post->id }}</td>
          <td>{{ $post->nome }}</td>
          <td>{{ $post->fone }}</td>
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

{{ $posts->links() }}

{{-- https://www.youtube.com/watch?v=Cct1MgxXRWU&list=PLhCiuvlix-rSRRmZAL2CNOMAUjgEiFoSl&index=4  --}}