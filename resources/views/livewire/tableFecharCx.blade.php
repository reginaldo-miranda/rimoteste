<div class="modal fade" id="ModalFechar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Fechamento de caixa</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="inputes">valor total:<input id="inputvlrtotal" class="input-group " value="{{ $vendas->totalv ?? old('totalv') }}" type="number" step="0.001"> </div>

          <div class="inputes">dinheiro :<input id="inputdinh" type="text" class="input-group" ></div>  
          
          <div class="inputes">Cartao   :<input id="inputcartao" type="text" class="input-group" ></div>

          <div class="inputes">Pix   :<input id="inputpix" type="text" class="input-group" ></div>
        
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



 

 