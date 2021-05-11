<div class="form-group">
    <label>nome</label>
    <input type="text" class="form-control" wire:model="nome">
    @error("nome")<span>{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <label>fone</label>
    <input type="text" class="form-control" wire:model="fone">
    @error("fone")<span>{{ $message }}</span> @enderror
</div>