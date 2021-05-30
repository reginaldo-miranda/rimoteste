<div>
    <h1>aqui</h1>
@include('livewire.formpdv')  
@foreach($produtos as $pesquisa)  // $key => $value) 
                
    {{ $pesquisa->descricao }}
                  
@endforeach 

@include('livewire.modaprod')


</div>
   