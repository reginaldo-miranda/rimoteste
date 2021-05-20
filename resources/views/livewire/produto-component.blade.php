<div>
    
    <div class="col-sm-3">
        @include("livewire.$view")
    </div>
    <div class="col-sm-9">
         @include("livewire.tableProd") 
        {{-- @include("livewire.tableProd.$produtos")  --}}
        {{--    @include('livewire.tableProd', ['searchprod' => $searchprod])
         @include('user-profile', ['user' => $user])  --}}
        
    </div>
</div>
