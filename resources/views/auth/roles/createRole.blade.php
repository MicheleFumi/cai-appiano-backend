@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">AGGIUNGI RUOLO</h2>

   
    <form action={{route('roles.store')}} method="POST">
        @csrf
        <div class="mb-3">
            <label for="basic-url" class="form-label">Nome Ruolo</label>
            
             
            <input type="text" class="form-control @error('role') is-invalid @enderror" name="role" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          
            <small id="helpId" class="text-muted">Inserisci il ruolo </small>
            @error('first_name')
                <div class="text-danger">{{ 'Inserisci il Ruolo' }}</div>
            @enderror
          </div>
<button type="submit" class="btn btn-secondary">
   Aggiungi
</button>

    </form>
    
</div>


@endsection