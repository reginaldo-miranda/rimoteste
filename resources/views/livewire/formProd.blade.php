{{-- <div class="row">
    <label>procurar produtos</label>
    <input type="text" class="form-control" wire:model="searchprod">  
    @error("searchprod")<span>{{ $message }}</span> @enderror
    
   
</div>  --}}

<div class="form-group">
    <label>Descricao</label>
    <input type="text" class="form-control" wire:model="descricao">
    @error("descricao")<span>{{ $message }}</span> @enderror
{{-- </div>
<div class="form-group">  --}}
    <label>grupo</label>
    <input type="text" class="form-control" wire:model="grupo">
    @error("grupo")<span>{{ $message }}</span> @enderror

{{-- <div class="form-group">  --}}
    <label>preco venda</label>
    <input type="text" class="form-control" wire:model="pvenda">
    @error("pvenda")<span>{{ $message }}</span> @enderror


    <label>procurar produtos</label>
    <input type="text" class="form-control" wire:model="searchprod">  
    @error("searchprod")<span>{{ $message }}</span> @enderror
</div>

