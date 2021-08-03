@include('layout')
<div class="container-fluid" style="background-color:rgb(154, 154, 247)">

    <div class="row">
        <!-- inicio row 1 ----->
        <div id="cabecalho" style="background-color:rgb(189, 247, 189); width: 55%">
            <div id="menu">
                <a href="{{ url('/menu') }}" id="menu">Menu</a>
            </div>
   {{--   inicio dos script         --}}
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
                $("#btncancela").show();
                //  id.innerHTML = "Ooops!";
                  id.innerHTML = "Ooops caixa aberto gaste bem!";
                //  $("#botaoabrir").show();
             //   document.getElementById('botaoabir').style.display = 'block';
            }
                /*
            $(".input").keyup(function() {
                if (this.value.length == this.maxLength) {
                    $(this).next('.inputs').focus();
                }
            });
            */
            
    </script>

    {{-- fim dos script --}}

            <div id="textareadescprod">

                {{-- <textarea id="textareavenda" name="textareavenda" style="font: bold 18px Arial, Helvetica, sans-serif"> --}}
                <p>
                <h3>
                    @if (is_array($totalvenda))
                        @foreach ($totalvenda as $vendas)
                             nome :{{ $nome }} {{ $descricao }}
                        @endforeach
                    @else
                        <h1>
                            <p>nao é array venda pdv</p>
                        </h1>
                    @endif
                 
                </h3>
                </p>
             
                
                {{-- </textarea> --}}

            </div>
        </div>

        <!-------------------------------------------------------------------------->

        <div id="blocodevalores">


            <div id="valortotal">
                <div class="form-group">
                    {{-- <h2>valor total:<input type="text" value="{{ $totalvenda ?? old('totalvenda')}}"></h2> --}}

                    <h2>valor total:<input value="{{ $vendas->totalv ?? old('totalv') }}" type="number" step="0.01">
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

        <div class="row">
            <!-- row 2 ---->

            <div class="col-4">
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
            </div>
            <div class="col-8">
                <div class="ml-auto mr-0" style="width: 68%">
                    @include('livewire.pdvvenda')
                  {{-- 
                    @if (is_array( $checar))
                        @if(!empty($checar))
                                                   
                            <h4>é array checar</h4>

                                @foreach ($checar as $checa)
                               {{--  status da venda : {{  $ch = $checa->statusvenda }}  --}}
                                    
                                  {{--    @if ($checa->statusvenda == 1)  --}}
                                       
                                     {{-- 
                                       <script>
                                            
                                            document.getElementById("inputqde").focus();
                                            document.getElementById("botaoabrir").style.display = 'none';
                                            document.getElementById("btnfechar").style.display = 'none';
                                            //$("#btnfechar").hide();
                                            //$("#btncancela").show();
                                            
                                            <h3>dentro do foreach e if</h3>
                                        </script>
                                      --}}    
                                 {{--    @endif  -
                                    
                                @endforeach

                                numero da venda : {{ $checa->id_venda }}
                               {{-- 
                                    @if ($checa->statusvenda == 2)
                                    @if(!empty($checa))
                                        <button id="botaoabrir" wire:click="abrir" onclick="getfocus(this)">Caixa Fechado</button>
                                    @endif                              
                                    @endif
                                --}}  
                                {{-- 
                                <input wire:model.refer="id_venda" type="text" name="id_venda" value="{{ $checa->id_venda ?? old('id_venda') }}" >     
                                 -

                              
                                
                        @else
                                <p>fechada</p>
                                 <button id="botaoabrir" wire:click="abrir" onclick="getfocus(this)">Caixa Fechado</button>
                                 <script> document.getElementById("btnfechar").style.display = 'none';</script>
                        @endif        
                                
                                

                    @else
                      <h1>checar nao é array</h1>
                    @endif  
                    --}}  
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

        <input value="{{ $pvenda ?? old('pvalor') }}" type="text" id="inputvalor" name="inputvalor" >
       
{{-- 
        <button type="button" id="btnmodal" class="btn btn-primary btn-sm" data-bs-toggle="modal"
            data-bs-target="#exampleModal" data-bs-whatever="@tableprod">Lista</button>
 --}}
        <button type="button" id="btnmodal" class="btn btn-danger btn-sm" data-bs-toggle="modal"
            data-bs-target="#exampleModal" data-bs-whatever="fecharCx">Fechar</button>

        <button type="button" class="btn-sm btn btn-primary" data-bs-toggle="modal"
         data-bs-target="#exampleModal" data-bs-whatever="@tableFecharCx">Open modal</button>    
  
        <!-- </div> -->

        <!-- <div> --->
        <div class="col-2 ml-auto mr-0">

            @if (is_array( $checar))

                 @if(!empty($checar))
                            
                    @foreach ($checar as $checa)
                        {{ $btn = $checa->statusvenda }}
                     @endforeach
                     @if($btn == 1)
                        numero da venda : {{ $checa->id_venda }}
                        <button  id="btnfechar" class="btn btn-success" wire:click="fecharvenda({{ $post ? $post->id_venda : ''}}) on">fechar</button>    
                     @endif    
            
                @endif
            @endif     


            
           {{-- esta em uso   <button  id="btnfechar" class="btn btn-success" wire:click="fecharvenda({{ $post ? $post->id_venda : ''}}) on">fechar</button>    
           
           {{--     <button  id="btnfechar"  wire:click="fecharvenda({{ $post ? $post->id_venda : ''}}) on" class="btn btn-success" onclick="getfechar(this)">fechar</button> --}}
               
            <button id="btncancela" wire:click="default" class="btn btn-danger">cancela</button>
        </div>
    </div>
    <!-- </div> -->

</div>


{{-- <input type="text" id="input1"  maxlength="5" onkeyup="PressEnter('input2');" required>
  <input type="text" id="input2"  maxlength="5" required> --}}








{{-- https://www.youtube.com/watch?v=qvxSEov0UhY&t=203s // pesquisa search --}}


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
 --}}