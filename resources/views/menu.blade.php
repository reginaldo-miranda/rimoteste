<html>
@extends('layout')
<header>
    <nav class="menuh">
        <div class="row">
            <ul>
                <li><a href="#">Venda</a>
                    <ul>
                        <li><a href="#">Pdv</a></li>
                        <li><a href="#">Pedido</a>
                            <ul>
                                <li><a href="#">Pedido Venda</a></li>
                                <li><a href="#">Orcamento</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><a href="#">Nota Fiscal</a></li>
                <li><a href="#">P Compra</a></li>
                <li><a href="#">Troca e devolução</a></li>
                <li><a href="#">Consignação</a></li>
            </ul>
        </div>
    </nav>


</header>
<div class="btnAbre">menu</div>
<nav class="menuLateral">

    <div class="titulo">Fechar</div>
    <ul class="itemprodutos">
        <li><a href="#">Voltar</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Fornecedores</a></li>
        <li><a class="produtos" href="#">Produtos</a>
            <ul class="itemprodutos">
                <li><a href="{{ url('/mostraProd') }}">Produtos</a></li>

                {{-- <li><a href="{{ route("mostra") }}" >Grupo</a></li> --}}
                <li><a href="{{ url('/mostra') }}">Grupo</a></li>

                {{-- <li><a href="{{ route('menu') }}">Some Text</a></li> --}}

                <li><a href="#">Tipos</a></li>
            </ul>
        </li>
        <li><a href="#">Usarios</a></li>
        <li><a href="#" class="funcionais">funcionais</span></a>
            <ul class="itemfuncionais">
                <li><a href="#">Empresa</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>
        </li>
        <li><a href="#" class="relatorios">Relatorios</a>
            <ul class="itemrelatorios">
                <li><a href="#">Clientes</a></li>
                <li><a href="#">Produtos</a></li>
            </ul>
        </li>
    </ul>

    </div>

</nav>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

<script>
    $('.produtos').click(function() {
        $('.menuLateral ul .itemprodutos').toggleClass('mostra');
    });

    $('.btnAbre').click(function() {
        $('.menuLateral').toggleClass('abre');
    });


    $('.btnFecha').click(function() {
        $('.menuLateral').toggleClass('abre');
    });

    $('.funcionais').click(function() {
        $('.menuLateral ul.itemfuncionais').toggleClass('mostra');
    });

    $('.produtos').mouseover(function() {
        $('.menuLateral ul .seta1').toggleClass('gira');
    });

    $('.produtos').mouseout(function() {
        $('.menuLateral ul .seta1').toggleClass('gira');
    });

    $('.funcionais').mouseover(function() {
        $('.menuLateral ul .seta2').toggleClass('gira');
    });
    $('.funcionais').mouseout(function() {
        $('.menuLateral ul .seta2').toggleClass('gira');
    });
    const $menuLateral = $('.menuLateral');
    $(document).mouseup(e => {
        if (!$menuLateral.is(e.target) && $menuLateral.has(e.target).length === 0) {
            $menuLateral.removeClass('abre')
        }
    });
</script>

</html>
