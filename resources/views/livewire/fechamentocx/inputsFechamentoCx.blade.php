
          {{-- <div class="inputes">valor total:<input id="inputvlrtotal" class="input-group " value="{{ number_format($vendas->totalv, 2, ',' , '.') ?? old('totalv') }}" wire.model="total"></div>  
          <div class="inputes">valor total:<input id="inputvlrtotal" class="input-group " value="{{ number_format($total, 2, ',' , '.') ?? old('total') }}" wire:keydown.enter="calfechamento($event.target.value)"></div>
                  
           <div class="inputes">dinheiro:<input id="inputdinh" type="text" class="input-group" value="{{ number_format($inputdinh, 2, ',' ,  '.')}}" wire:keydown.enter="calfechamento($event.target.value)"></div>   
          
           <h3>{{ $total }}</h3>
          <div class="inputes">Cartao   :<input id="inputcartao" type="text" class="input-group" ></div>

          <div class="inputes">Pix   :<input id="inputpix" type="text" class="input-group" ></div>
  

          
    <label>procurar produtos</label>
    <input type="text" class="form-control" wire:model="searchprod">  
    @error("searchprod")<span>{{ $message }}</span> @enderror --}}
 
    <div class="inputes">valor total:
        <input type="text"  class="input-group " id="inputvlrtotal" name="inputvlrtotal" 
        value="{{ number_format($total, 2, ',' , '.') ?? old('total') }}">
    </div>
    
    <div class="inputes">dinheiro:
        <input type="text" class="input-group"  id="inputdinh"     name="inputdinh"    
               value="{{ number_format($inputdinh, 2, ',' ,  '.')}}">
      </div>   
           
    <div class="inputes">Cartao   :
        <input id="inputcartao" type="text" class="input-group" >
    </div>
    <div class="inputes">Pix   :
        <input id="inputpix" type="text" class="input-group" >
    </div>

    
    @include('livewire.fechamentocx.botaoFechamentoCx')
   {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  --}}
    <script>
    $(document).ready(function() {
        $("#inputvlrtotal,#inputdinh").on('keyup', function() {
      
          var total  = parseFloat($('#inputvlrtotal').val()) || 0;
          var dinh   = parseFloat($('#inputdinh').val()) || 0;
         
          var totalgeral = total-dinh;
          $('#inputvlrtotal').val(totalgeral);
          var totalg = total-cartao;
      
        });
      });


      $(document).ready(function() {
        $("#inputvlrtotal,#inputcartao").on('keyup', function() {
      
          var total  = parseFloat($('#inputvlrtotal').val()) || 0;
          var cartao = parseFloat($('#inputcartao').val()) || 0;
          var totalgeral = total-cartao;
          $('#inputvlrtotal').val(totalgeral);
         
          
       
        });
      });
      $(document).ready(function() {
        $("#inputvlrtotal,#inputpix").on('keyup', function() {
      
          var total  = parseFloat($('#inputvlrtotal').val()) || 0;
          var pix = parseFloat($('#inputpix').val()) || 0;
          var totalgeral = total-pix;
          $('#inputvlrtotal').val(totalgeral);
                  
                      
      
        });
      });

</script>
    
{{-- https://pt.stackoverflow.com/questions/211767/somar-inputs-com-jquery-e-tempo-real  calculo de caixa--}}