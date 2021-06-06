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

    <div class="row" >
        
      <div>
        @include('livewire.pdvvenda')
    </div>  
      <div class="col-4" id="col4">
      <button class="btn btn-primary btn-sm">abrir</button>
      {{--  <textarea id="areavenda" row="100" cols="80" name="areavenda">{{ $descricao }}</textarea><br> 
     
      <textarea class="form-control" type="text" name = 'areavenda'  rows="3" value = "{{ $descricao }}" ></textarea> --}}
      </div>
          
      <div>
        
        <label>produto</label>
          {{--   <input type="text" class="form-control" wire:model="searchprod1">  
        <input type="text" class="form-control" wire:keydown.enter="edit({{ $id }})"> --}} 
        
        <input type="text" class="form-control" wire:model.lazy="prod_id" wire:keydown.enter="edit($event.target.value)">
       
        @error("buscapdv")<span>{{ $message }}</span> @enderror
        
    </div>
       
    @include('livewire.modaprod')
   
    </div>
                       
 </div>
 
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

<div>  --}}
    {{-- 
    <!DOCTYPE html>
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
    </html>
    
 --}}
    

 {{-- 
<html>
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
</html>
 --}}

 {{-- https://www.youtube.com/watch?v=qvxSEov0UhY&t=203s // pesquisa search--}}