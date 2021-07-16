
<div class="container-fluid" style="background-color:rgb(154, 154, 247)" >
 
    <div class="row"> <!-- inicio row 1 -----> 
        <div id="cabecalho" style="background-color:rgb(189, 247, 189); width: 55%">
            <div id="menu">
                <a href="{{ url('/menu') }}" id="menu">Menu</a>
            </div>
                 
            <div id="textareadescprod">
                <textarea id="textareavenda" name="textareavenda">
             
                  {{ $totalvenda }}   {{$nome}} {{ $id_venda }}            

                 </textarea>
            </div>
        </div>

        <!-------------------------------------------------------------------------->

        <div id="blocodevalores">
         {{--  
              @if( is_array($totalvenda))
                  @foreach($totalvenda as $vendas)
                    {{ $vendas->$vlrvenda }}                
                  @endforeach 
              @endif
          --}}
         
            <div id="valortotal">
                   <div class="form-group">
                  {{--   <h2>valor total:<input type="text" value="{{ $totalvenda ?? old('totalvenda')}}"></h2>
                   --}}

                    <h2>valor total:<input type="text"> 
                      {{-- value="{{ $vlrvenda }}">  --}}

                    </h2>
                  </div>
                  <div class="form-group">
                      <h3>Valor pago:&nbsp<input type="text"></h3>
                  </div>
                  <div class="form-group">
                      <h3>Troco:&nbsp &nbsp &nbsp &nbsp <input type="text"></h3>
                  </div>
              
            </div>

        </div>
    </div> <!-- fim da div row 1 ---->

    <div class="container" style="background-color:rgb(211, 181, 181)">
      <div class="row"> <!-- row 2 ---->
       
        <div class="col-4">
            <div id="btnabrir">
                  {{-- <button id="botaoabir" wire:click="abrir({{ $ap = 1}}) ">abrir venda</button> --}}
                  <button id="botaoabir" wire:click="abrir" onclick="getfocus(this)">Caixa Fechado</button>
            </div>
          </div>
          <div class="col-8">
            <div class="ml-auto mr-0" style="width: 68%">
              @livewire('vendaitens-componente')
      {{--        @include('livewire.pdvvenda')  --}}
              
              @if(is_array($vendab))
                  @foreach ($vendab as $post)
                      @if($statusvenda == 1)
                          <script>
                              document.getElementById("inputqde").focus();
                              document.getElementById("botaoabir").style.display = 'none';
                              document.getElementById("btnfechar").style.display = 'none';
                              //$("#btnfechar").hide();
                              //$("#btncancela").show();
                          </script>
                      @endif
                      
                  @endforeach  
               @endif   
              </div>
               --}}
          </div>     
        
      </div>   <!----- fim da row 2 --------->  
    </div> 
    <!-- <div class="col-12"> -->
        <div>
            <label for="inputprod"  class="negrito">produto</label>
            <label for="inputqde"   id="labelqde">Qde</label>
            <label for="inputvalor" class="negrito">Valor<label>
           
        </div>
        <div class="row">
           {{--  <input type="text"     id="inputprod" wire:model.lazy="prod_id" wire:keydown.enter="edit($event.target.value)" >
                 <input id="inputqde"   type="text" name="inputqde">
                 <input id="inputvalor" type="text" name="inputvalor" value="{{ $pvenda ?? old('pvalor')}}  ">
           --}}
            {{--   <input type="text" class="form-control" id="text_razaosocial" name="nomeCliente"
                    placeholder=" Nome do cliente:" value="{{ $dados->razaosocial ?? old('razaosocial') }}">
            --}}
    
                 <input id="inputqde"   type="text"  name="inputqde" maxlength="5" onkeydown="PressEnter('inputprod');" required>

                 <input id="inputprod"  type="text"  name="inputprod" wire:model.lazy="prod_id" wire:keydown.enter=edit($event.target.value)
                  maxlength="5" onkeydown="PressEnter('inputvalor');" required>
                
                 <input id="inputvalor" type="text"  name="inputvalor" value="{{ $pvenda ?? old('pvalor')}}" required>
                   
            <button type="button"  id="btnmodal" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@tableprod">Lista</button>
           
        <!-- </div> -->

        <!-- <div> --->
            <div class="col-2 ml-auto mr-0">
           {{--              
              <button  id="btnfechar" class="btn btn-success" wire:click="fecharvenda({{ $post ? $post->id_venda : ''}}) on">fechar</button>   
              <button  id="btnfechar"  wire:click="fecharvenda({{ $post ? $post->id_venda : ''}}) on" class="btn btn-success" onclick="getfechar(this)">fechar</button>  --}}
               <button id="btncancela" wire:click="default" class="btn btn-danger">cancela</button>
            </div> 
       </div>
     <!-- </div> -->
 
</div>

<script>
  /*
$(".input").keyup(function() {
    if (this.value.length == this.maxLength) {
        $(this).next('.inputs').focus();
    }
});
*/
</script>


<script type="text/javascript">

function PressEnter(nextinputId){
    if(event.keyCode == 13){
        document.getElementById(nextinputId).focus();     
        return false;           
    }
}

</script>
{{-- 
  <input type="text" id="input1"  maxlength="5" onkeyup="PressEnter('input2');" required>
  <input type="text" id="input2"  maxlength="5" required>
 --}}




<script>

    $("#btnfechar").hide();

    function getfocus(id) {

         
      //  document.getElementById("inputprod").disabled = false;
        document.getElementById("inputqde").focus();

 
        $("#botaoabir").hide();
        $("#btnfechar").show();
        $("#btncancela").show();
       
      
        //  id.innerHTML = "Ooops!";
        id.innerHTML = "Ooops caixa aberto gaste bem!";
        $("#botaoabir").show();
       
        
        document.getElementById('botaoabir').style.display = 'block';
   
    }


    </script>

{{--  ------------------------- inicio ---------------------------------  

$(function () {
  setDisabled(true);

  $("#IniciarTarefa").on("click", function (e) {
      $("#IniciarTarefa").hide();
      $("#submeter").show();
      e.preventDefault();
      setDisabled(false);
      
  });

  $("#FinalizarTarefa").on("click", function (e) {
      e.preventDefault();
      setDisabled(true);
  });

  function setDisabled(state) {
      $('.desabilita input,select,textarea, checkbox').each(function () {
          if(state) $("#submeter").hide();
          $(this).prop("disabled", state);
      });
  }
});


--------------------------------------------------------------------------------
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
<div class="desabilita">
   <input>
</div>
<button id="IniciarTarefa">Incluir</button>
<button id="submeter">Gravar</button>
{{--  ------------------------- fim ---------------------------------  --}}






{{-- <html>
<head runat="server">
    <title></title>
</head>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">

    $(document).ready(function (e) {
        $("#divConteudo").hide();

        $("#btnMostrarEsconder").click(function (e) {
            $("#divConteudo").toggle();
        });
    });
</script>

<body>
    <div id="divConteudo">
        Conteudo
    </div>
    <button id="btnMostrarEsconder" type="button">Mostrar e Esconder</button>
</body>
</html> --}}

{{-- <script src="http://code.jquery.com/jquery-latest.min.js"></script>




 <script type="text/javascript">
     $(document).click(function (e) {
         $("#btnabrir").hide();
 
         $("#botaoabir").ready(function (e) {
           $("#btnabrir").hide(); //toggle();
         });
     }); --}}


{{-- voltar o botao fechar

   const botaoSticky = function(e) {
  e.target.style.display = "none";
  aparecerSticky();
}

const aparecerSticky = function() {
  const mySticky = document.querySelector('.sticky');
  mySticky.style.display = "block";
}
.sticky {
  display: none;
  background: rgb(42, 197, 211);
  height: 30vh;
  width: 90%;
  margin-top: 20px;
}
<aside>
  <input type="button" value="botão sticky" class="botao" onclick=botaoSticky(event)>

  

  <div class="sticky">
    <p>meu sticky</p>
  </div>
</aside> --}}





{{-- <div id="pagina">
   
<div class="container-fluid" id="bloco"> 
  <textarea id="areavenda1" row="1" cols="25" name="areavenda1">
    {{ $descricao }}
</textarea> 
    <div class="row">
      <a href="{{ url('/menu') }}">Menu</a>
      <div class="col"> <button wire:click="abrir"class="btn btn-primary btn-sm">abrir</button></div>
      <div class="col">col</div>
      <div class="col">col</div>
      <div class="col">col</div>
    </div>

    <div class="row" >
      
       <div>
          @include('livewire.pdvvenda')
       </div>  
          
          
        <label>produto <textarea id="areavenda" row="1" cols="25" name="areavenda1">
          {{ $descricao }}
         </textarea></label>
          {{--   <input type="text" class="form-control" wire:model="searchprod1">  
        <input type="text" class="form-control" wire:keydown.enter="edit({{ $id }})"> -
         
        Codigo Produtos:<input type="text" id="inputpdv"class="form-control" wire:model.lazy="prod_id" wire:keydown.enter="edit($event.target.value)">
  
        @error('buscapdv')<span>{{ $message }}</span> @enderror
        
    </div>
    </div>
 </div>
  
    {{--   <script type="text/javascript">
        window.onscroll = function (ev) {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                window.livewire.emit('load-more');
            }
        };

      </script>  

        
 </div> 

{{-- 

  <div class="container">
    <div class="row" id="telapdv">
        <label><h3>Produtos</h3></label><br>
        <label><h3>foto e logo</h3></label>
        <div id="telaprod">
            {{--  <textarea id="areavenda" row="100" cols="70" name="areavenda"></textarea>  
             <textarea id="areavenda" name="areavenda"></textarea>
        </div>
    </div>    

<div> --}}
{{-- <!DOCTYPE html>
    <html>
    <head>
    <style>
    .item1 { grid-area: header; }
    .item2 { grid-area: menu; }
    .item3 { grid-area: main; }
    .item4 { grid-area: right; }
    .item5 { grid-area: footer; }
    
    .grid-container {
      display: grid;
      grid-template-areas:
        'header header header header header header'
        'menu main main main right right'
        'menu footer footer footer footer footer';
      grid-gap: 10px;
      background-color: #2196F3;
      padding: 10px;
    }
    
    .grid-container > div {
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 20px 0;
      font-size: 30px;
    }
    </style>
    </head>
    <body>
    
    <h1>Grid Layout</h1>
    
    <p>This grid layout contains six columns and three rows:</p>
    
    <div class="grid-container">
      <div class="item1">Header</div>
      <div class="item2">Menu</div>
      <div class="item3">Main</div>  
      <div class="item4">Right</div>
      <div class="item5">Footer</div>
    </div>
    
    </body>
    </html> --}}


{{-- <html>
<head>
<style>
.grid-container {
  display: grid;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 5px;
  height: 600px;
}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 10px;
  font-size: 30px;
  
}

.item1 {
  grid-column: 1 / span 2;
  grid-row: 1;
}

.item2 {
  grid-column: 3;
  grid-row: 1 / span 2;
  height: 300px;
}

.item5 {
  grid-column: 1 / span 3;
  grid-row: 13;
}
</style>
</head>
<body>

<h1>A Five Items Grid Layout:</h1>

<div class="grid-container">
  <div class="grid-item item1">1</div>
  <div class="grid-item item2">12</div>
  <div class="grid-item item3">3</div>  
  <div class="grid-item item4">4</div>
  <div class="grid-item item5">5</div>
</div>

<p>Direct child elements(s) of the grid container automatically becomes grid items.</p>

<p>Item 1, 2, and 5 are set to span multiple columns or rows.</p>

</body>
</html> --}}

{{-- https://www.youtube.com/watch?v=qvxSEov0UhY&t=203s // pesquisa search --}}
