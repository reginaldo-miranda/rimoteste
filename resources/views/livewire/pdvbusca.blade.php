<div>
  
    <h1>aqui</h1>
 
@foreach($produtos as $pesquisa) {{--  // $key => $value)  --}}
                
    {{ $pesquisa->descricao }}
                  
@endforeach 

@include('livewire.modaprod')
 
@include('livewire.formProd')
</div>
   