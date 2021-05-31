<div>
  
    <h1>aqui</h1>
 
@foreach($produtos as $pesquisa) {{--  // $key => $value)  --}}
                
    {{ $pesquisa->descricao }}
                  
@endforeach 
<textarea id="areavenda" row="100" cols="80" name="areavenda">{{$pesquisa->descricao}}</textarea>

 

</div>
   