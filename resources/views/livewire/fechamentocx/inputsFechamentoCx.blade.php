  
      <div class="inputes">valor total:
        <input type="text"  id="n1" value="{{ $total }}" />
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
      <div class="inputes">
        <input type="text" id="resto"> 
      </div>  
      
       <div id="resultado"></div>

      
    
    @include('livewire.fechamentocx.botaoFechamentoCx')

   {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  --}}
 <script>

  
function checarNaN(val) {
  
  if (isNaN(val))
    val = 0;

  return val;
}

function calcular() {

  var n1 = checarNaN(parseFloat(document.getElementById('n1').value, 10));
  var n2 = checarNaN(parseFloat(document.getElementById('n2').value, 10));
  var n3 = checarNaN(parseFloat(document.getElementById('n3').value, 10));
  var n4 = checarNaN(parseFloat(document.getElementById('n4').value, 10));

  var ress =  document.getElementById('resultado').innerHTML = n1-n2;
  var ress =  document.getElementById('resultado').innerHTML = ress-n3;
  var ress =  document.getElementById('resultado').innerHTML = ress-n4;
  $('#resto').val(ress)

  // if (isNaN(ress)){
  //   return ress = 0
  // }else{

  //  $('#resto').val(ress)
 
 // }
  
 
}

</script>   



{{-- https://pt.stackoverflow.com/questions/211767/somar-inputs-com-jquery-e-tempo-real  calculo de caixa
{{-- 
function calcular() {
  var n1 = parseInt(document.getElementById('n1').value, 10);
  var n2 = parseInt(document.getElementById('n2').value, 10);
  document.getElementById('resultado').innerHTML = n1 + n2;
}
<form action="" method="post">
  N1: <input type="text" id="n1" value="10" /> <br>
  N2: <input type="text" id="n2" value="5" onblur="calcular()" /> <br>
</form>

<div id="resultado"></div>


/*
function milliseconds(x) {
  if (isNaN(x)) {
    return 'Not a Number!';
  }
  return x * 1000;
}
*/

//var j = parseFloat(Math.round(29.6 * 100) / 100).toFixed(2);
  /*
    $(document).ready(function() {
        $("#inputvlrtotal,#inputdinh").on('keyup', function() {
      
          var total  = parseFloat($('#inputvlrtotal').val()) || 0;
          var dinh   = parseFloat($('#inputdinh').val()) || 0;
          var totalgeral = total-dinh;
          $('#inputvlrtotal').val(totalgeral);
      
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
      
     
      function calcular(){
       var n1 = parseInt(document.getElementById('inputvlrtotal')).value);
       var n2 = parseInt(document.getElementById('inputdinh')).value);
       document.getElementById('inputvlrtotal').innerHTML = n1 - n2;

} 
*/
          {{-- <div class="inputes">valor total:<input id="inputvlrtotal" class="input-group " value="{{ number_format($vendas->totalv, 2, ',' , '.') ?? old('totalv') }}" wire.model="total"></div>  
          <div class="inputes">valor total:<input id="inputvlrtotal" class="input-group " value="{{ number_format($total, 2, ',' , '.') ?? old('total') }}" wire:keydown.enter="calfechamento($event.target.value)"></div>
                  
           <div class="inputes">dinheiro:<input id="inputdinh" type="text" class="input-group" value="{{ number_format($inputdinh, 2, ',' ,  '.')}}" wire:keydown.enter="calfechamento($event.target.value)"></div>   
          
           <h3>{{ $total }}</h3>
          <div class="inputes">Cartao   :<input id="inputcartao" type="text" class="input-group" ></div>

          <div class="inputes">Pix   :<input id="inputpix" type="text" class="input-group" ></div>
  

          
    <label>procurar produtos</label>
    <input type="text" class="form-control" wire:model="searchprod">  
    @error("searchprod")<span>{{ $message }}</span> @enderror 
 
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

--}}

