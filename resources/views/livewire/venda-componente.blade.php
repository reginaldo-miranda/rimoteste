<div>
    {{--  <h4> estou na venda - componente</h4>  
        
    @if( is_array($totalvenda))
         @foreach($totalvenda as $vendas)
             {{ $vendas->totalv }}                
        @endforeach 
    @else
       <h1><p>nao é array venda pdv</p></h1>    
    @endif --}} 
    @include('livewire.pdv_form')
           
</div>
