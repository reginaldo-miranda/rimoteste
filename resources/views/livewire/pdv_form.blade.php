@include('layout')
<div class="container-fluid" style="background-color:rgb(154, 154, 247)">
  
    <div class="row">
        <!-- inicio row 1 ----->
        <div id="cabecalho" style="background-color:rgb(189, 247, 189); width: 55%">
            <div id="menu">
                <a href="{{ url('/menu') }}" id="menu">Menu</a>
            </div>
            <div id="image">
               <img src="{{ asset('image/logopdv.bmp') }}" />
            </div>
             <div id="textareadescprod">

                {{-- <textarea id="textareavenda" name="textareavenda" style="font: bold 18px Arial, Helvetica, sans-serif"> --}}
         {{--       <div>    
                <p>
                    <h3>
                        @if (is_array($totalvenda))
                            @foreach ($totalvenda as $vendas)
                                {{--  nome :{{ $nome }}  <h2>{{ $descricao }}</h2>
                            @endforeach
                        @else
                             <h1>
                                <p>nao é array venda pdv</p>
                            </h1>
                        @endif
                    
                    </h3>
                </p>
            </div>  --}}
                {{-- </textarea> --}}

            </div>
        </div>

        <!-------------------------------------------------------------------------->

        <div id="blocodevalores">


            <div id="valortotal">
                <div class="form-group">
                    {{-- <h2>valor total:<input type="text" value="{{ $totalvenda ?? old('totalvenda')}}"></h2> --}}
                    <label id="legendavalortotal">valor total</label> 
                    {{--<p id="inptvalortotal"><input id="inptvlr" class="form-control" value="{{ $vendas->totalv ?? old('totalv') }}"></p> --}}


                   
                    @if (is_array($totalvenda))
                        @foreach ($totalvenda as $vendas)
                            <p id="inptvalortotal"><input id="inptvlr" class="form-control" value="{{number_format($vendas->totalv, 2, ',', '.') ?? old('totalv') }}" wire.model='totalv'></p>
                        @endforeach
                     @else
                        <h1>
                            <p>nao é array venda pdv</p>
                        </h1>
                      @endif


                       {{--<td>{{ number_format($post->pvenda, 2, ',', '.') }}</td> --}}
                    
                </div>
                {{-- 
                <div class="form-group">
                    <h3>Valor pago:&nbsp<input type="text"></h3>
                </div>
                <div class="form-group">
                    <h3>Troco:&nbsp &nbsp &nbsp &nbsp <input type="text"></h3>
                </div>
                 --}}
            </div>

        </div>
    </div> <!-- fim da div row 1 ---->

  {{--  <div class="container" style="background-color:rgb(211, 181, 181)">  --}} 
         <div class="container" style="background-color:rgb(107, 231, 114)">

        <div class="row">
            <!-- row 2 ---->

            <div class="col-4">
                @if (is_array( $checar))

                    @if(!empty($checar))
                        <h4>é array checar</h4>
                            @foreach ($checar as $checa)
                           {{--  {{ $btn = $checa->statusvenda }}  --}}
                            @endforeach
                            numero da venda : {{ $checa->id_venda }} <h2>{{ $descricao }} </h2>
                        
                             
                          
                    @else
                            <p>fechada</p>
                            <button id="botaoabrir" wire:click="abrir" onclick="getfocus(this)">Caixa Fechado</button>
                    @endif        
                    
                @else
                <h1>checar nao é array</h1>
                @endif 
            </div>
            <div class="col-8">
                 
                <div class="ml-auto mr-0" style="width: 68%">  
                    @include('livewire.pdvvenda')
                    @include('livewire.tableFecharCx')
                 </div>

            </div>
            

        </div>
        <!----- fim da row 2 --------->
    </div>
    <!-- <div class="col-12"> -->
    <div class="row">

        <label for="inputqde"   id="labelqde">Qde</label>
        <label for="inputprod"  class="negrito">produto</label>
        <label for="inputvalor" id="labelvalor" class="negrito">Valor<label>
        <div id="qdeitens">qde de itens :{{ $vendas->qdeitens }} </div>
       
    </div>

    <div class="row">


        <input  wire:model.lazy="qde" type="text" id="inputqde"  name="inputqde">

        {{-- <input type="text" id="inputprod" wire:model.lazy="prod_id" wire:keydown.enter="edit($event.target.value)">  --}}

        <input wire:keydown.enter="edit($event.target.value)" wire:model.lazy="prod_id" type="text" id="inputprod"  >

        <input value="{{ $pvenda ?? old('pvalor') }}" type="text" id="inputvalor" name="inputvalor">

        

        <button type="button" id="btnmodal" class="btn btn-primary btn-sm" data-bs-toggle="modal"
            data-bs-target="#modalProd" data-bs-whatever="@tableprod">Lista</button>
           <!-- </div> -->

        <!-- <div> --->
        <div class="col-2 ml-auto mr-0">

            @if (is_array( $checar))

                 @if(!empty($checar))
                            
                    @foreach ($checar as $checa)
                       {{--  {{ $btn = $checa->statusvenda }}  --}}
                     @endforeach

                     @if($checa->statusvenda == 1)
                     
                        <button type="button" id="btnfechar" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#ModalFechar">Fechar</button>  {{-- data-bs-whatever="@tableFecharCx" --}}
                     
                     @endif    
            
                @endif
            @endif     
      

        </div>
   
            <button  id="btnabrirmodal" class="btn btn-danger btn-sm" wire:click="fecharvenda({{ $post ? $post->id_venda : ''}}) on">Cancela</button> 
    </div>
    <!-- </div> -->
    <script type="text/javascript">
        /*
        function PressEnter(nextinputId) {
            if (event.keyCode == 13) {
                document.getElementById(nextinputId).focus();
            return false;
            }
        }
   
        $("#btnfechar").hide();
        --}} */
        function getfocus(id) {
            //  document.getElementById("inputprod").disabled = false;
            document.getElementById("inputqde").focus();
            $("#botaoabrir").hide();
            $("#btnfechar").hide();
            //$("#btncancela").show();
            //  id.innerHTML = "Ooops!";
              id.innerHTML = "Ooops caixa aberto gaste bem!";
              $("#botaoabrir").show();
         //   document.getElementById('botaoabir').style.display = 'block';

        }
            /*
        $(".input").keyup(function() {
            if (this.value.length == this.maxLength) {
                $(this).next('.inputs').focus();
            }
        });
        */
        $(document).ready(function(){
            $('.date').mask('00/00/0000')
        });
       
         
        $(document).ready(function(){
            $('#inputvalor').mask('#.##0,00', {reverse: true});
            
         });
        
         $('#inputvalor').mask('#.##0,00', {reverse: true});
         

</script>

</div>


{{-- https://www.youtube.com/watch?v=qvxSEov0UhY&t=203s // pesquisa search --}}

{{-- https://www.youtube.com/watch?v=kCoHIDtAbwE // formatar o input--}}

{{-- https://www.youtube.com/watch?v=MNN-YyF020o  // formatar laravel --}}

{{-- https://www.youtube.com/watch?v=eOMnHsVm6vE // formatar dinheiro js--}}


{{-- 

@if (is_array( $checar))

    @if(!empty($checar))
        <h4>é array checar</h4>
            @foreach ($checar as $checa)
            {{ $btn = $checa->statusvenda }}
            @endforeach
            numero da venda : {{ $checa->id_venda }}
    @else
            <p>fechada</p>
            <button id="botaoabrir" wire:click="abrir" onclick="getfocus(this)">Caixa Fechado</button>
    @endif        

@else
<h1>checar nao é array</h1>
@endif 


<input type="text" data-mask="(00) 00000-0000" class="form-control" placeholder="Telefone" id="telefone" name="telefone">


<html>
<head>
<title></title>
<script type="text/javascript">
function formatar_mascara(src, mascara) {
 var campo = src.value.length;
 var saida = mascara.substring(0,1);
 var texto = mascara.substring(campo);
 if(texto.substring(0,1) != saida) {
 src.value += texto.substring(0,1);
 }
}
</script>
</head>
<body>


<form action="#" method="post">

CPF:<input name="cpf" method="post" type="text" maxlength="14" size="40" onkeypress="formatar_mascara(this,'###.###.###-##')">
CEP:<input name="cep" method="post" type="text" maxlength="11" size="40" onkeypress="formatar_mascara(this,'##.###-###')">
Fone:<input name="fone" method="post" type="text" maxlength="12" size="40" onkeypress="formatar_mascara(this,'##-####-####')">
</form>
</body>
</html>

------------------------------

<form method="post">
    <input type="text" name="dinheiro" placeholder="Dinheiro">
</form>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="http://localhost/Artigos/dist/jquery.maskMoney.min.js"></script>
<script>
    $(document).ready(function(){
        $('[name=dinheiro]').maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
    });
</script>

--}}

 