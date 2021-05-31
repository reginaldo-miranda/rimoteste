
@extends('layout')

<div id="pagina">


    <div class="container-fluid" id="bloco"> 

        <div class="row">
            <a href="{{ url('/menu') }}">Menu</a>
            <div class="col">col</div>
            <div class="col">col</div>
            <div class="col">col</div>
            <div class="col">col</div>
        </div>
        {{--  @include('menu')     --}} 
        <div class="row" >
            <div class="col-8">col-8</div>

            <div class="col-4" id="col-4">
                <textarea id="areavenda" row="380" cols="180" name="areavenda"></textarea>
            </div>
            {{-- @include('menu')  --}}
            <div>
                <label>Procurar produto</label>
                {{--  <input type="text" class="form-control" wire:model="buscapdv">  
                <input wire:keydown.enter="buscar">
                @error("buscapdv")<span>{{ $message }}</span> @enderror --}}
               {{-- <input type="text"  class="form-control" wire:model="searchprod1">  --}} 

                <input type="text"  class="form-control" wire:keydown.enter="buscar()">  
                     
               
                @error("searchprod")<span>{{ $message }}</span> @enderror
               
            </div>
              
            {{--    @include('livewire.modaprod')  --}}
             
        </div>
    </div>
     
</div> 
<div> 
    
</div>
