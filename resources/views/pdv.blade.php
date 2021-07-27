@extends('layout')
{{-- @include('livewire.pdv_form')
<h1>oba !! estou na pdv</h1> --}}
@section('content')
    <div class="container">
        @livewire('venda-componente')
        @livewire('pdvcomponent')

        {{-- @livewire('vendaitens-componente')
            @livewire('pdvcomponent')  
            @livewire('produto-component') --}}

    </div>
@endsection
