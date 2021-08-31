<div class="modal fade" id="ModalFechar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Fechamento de caixa novo</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
         @include('livewire.fechamentocx.inputsFechamentoCx')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" >Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button>  
        <button  id="btnfechar" class="btn btn-success" wire:click="fecharvenda({{ $post ? $post->id_venda : ''}}) on" data-dismiss="modal">fechar</button>    --}}
        @if (is_array( $checar))

        @if(!empty($checar))
                   
           @foreach ($checar as $checa)
              {{--  {{ $btn = $checa->statusvenda }}  --}}
            @endforeach

            @if($checa->statusvenda == 1)
              <button  id="btnfechar" class="btn btn-success" wire:click="fecharvenda({{ $post ? $post->id_venda : ''}}) on" data-dismiss="modal">fechar i</button> 
            @endif    
   
         @endif
       @endif 
      </div>
    </div>
  </div>
</div>





 

 