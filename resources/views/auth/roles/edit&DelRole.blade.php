@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="flex-grow-1 text-center mb-0">MODIFICA O CANCELLA RUOLO</h2>
        <button type="button" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina
        </button>
    </div>
    

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINA RUOLO</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler cancellare questo ruolo? L'operazione è irreversibile.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form method="POST"  action="{{route('roles.destroy', $role)}}" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">ELIMINA DEFINITIVAMENTE</button>
                </form>
            </div>
          </div>
        </div>
      </div>
      


    <form action={{route('roles.update',$role)}} method="POST">
        @method('PUT')
        @csrf
    
        <div class="mb-3">
            <label for="basic-url" class="form-label">Nome Ruolo</label>
            
             
            <input type="text" class="form-control @error('role') is-invalid @enderror" value="{{$role->role}}" name="role" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          
            <small id="helpId" class="text-muted">Inserisci il ruolo </small>
            @error('first_name')
            <div class="text-danger">{{ 'Inserisci il Ruolo' }}</div>
        @enderror
          </div>
<button type="submit" class="btn btn-secondary">
   Modifica
</button>

    </form>
    
</div>


@endsection