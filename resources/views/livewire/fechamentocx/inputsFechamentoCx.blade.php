
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
    </div> --}}
    <form action="" method="post">
      N1:  <input type="text"  id="n1" value="{{ $total }}" /> <br>
      dinh:<input type="text"  id="n2" value="{{ $inputdinh }}"  onchange="calcular()"/> <br>
      Pix: <input type="text"  id="n3" value="{{ $inputpix }}" onchange="calcular()" /> <br>
    
  
    </form>
    <input type="text" id="resto"> 
    <div id="resultado"></div>

    
    @include('livewire.fechamentocx.botaoFechamentoCx')

   {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  --}}
 <script>

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
function calcular() {
 // var n1 = parseInt(document.getElementById('n1').value, 10);
 // var n2 = parseInt(document.getElementById('n2').value, 10);
 // document.getElementById('resultado').innerHTML = n1-n2;

  var n1 = parseFloat(document.getElementById('n1').value, 10);
  var n2 = parseFloat(document.getElementById('n2').value, 10);
  var ress =  document.getElementById('resultado').innerHTML = n1-n2;

  $('#resto').val(ress)

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





--}}

