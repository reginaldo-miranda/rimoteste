@extends('layout')
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@tableprod">Lista</button>


{{--<button type="button" class="btn-sm btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@tableprod">Open modal</button>
-<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>  --}}


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{--    inicio         -

       @include('livewire.tableprod')  

        {{--     fim             --}}
  </div>
   
</div>

 {{--   <script>
        $(document).ready(function(){
        $('#exampleModal').modal('show');
        })
      </script>  
      <script> 
          $(window).load(function(){ $('#exampleModal').modal('show'); }); 
      </script> --}}