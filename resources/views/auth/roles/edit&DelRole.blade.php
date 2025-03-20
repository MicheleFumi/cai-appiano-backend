@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">MODIFICA O CANCELLA RUOLO</h2>
    
    <form action={{route('roles.update',$role)}} method="POST">
        @method('PUT')
        @csrf
    
        <div class="mb-3">
            <label for="basic-url" class="form-label">Nome Ruolo</label>
            
             
            <input type="text" class="form-control" value="{{$role->role}}" name="role" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          
            <small id="helpId" class="text-muted">Inserisci il ruolo </small>
          </div>
<button type="submit" class="btn btn-secondary">
   Aggiungi
</button>

    </form>
    
</div>


@endsection