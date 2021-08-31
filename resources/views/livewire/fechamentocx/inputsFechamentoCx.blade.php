
      <div class="inputes">valor total:
         <input type="text"  id="n1" value="{{ $total }}" />
      </div>  

      
     <div class="inputes">
        <label id="troco">Troco</label>
        <input type="text" id="resto"> 
      </div>

      <div class="inputes">dinheiro:
         <input type="text"  id="n2"  value="{{ number_format($inputdinh, 2, ',' ,  '.')}}" onchange="calcular()"/> 
      </div>

      <div class="inputes">Pix 
          <input type="text"  id="n3" value="{{ number_format($inputpix,2, ',', '.') }}"    onchange="calcular()"/> 
      </div> 
      
      <div class="inputes">Cartao   :
         <input type="text"  id="n4" value="{{ number_format($inputcartao,2, ',', '.') }}" onchange="calcular()"/> <br>
      </div>
           
       <div id="resultado"></div>
      
     
      <script type="text/javascript" 
         src="js/inputs.js">
      </script>
      @include('livewire.fechamentocx.botaoFechamentoCx') 
   
 
   {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  --}}


    {{-- https://pt.stackoverflow.com/questions/211767/somar-inputs-com-jquery-e-tempo-real  calculo de caixa --}}
