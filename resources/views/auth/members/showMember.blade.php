@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center">DETTAGLI</h2>

    <div class="container d-flex justify-content-center align-items-center py-4">
        <div class="row justify-content-center w-100">
            <div class="card shadow border-0 p-3 d-flex flex-row align-items-center" style="max-width: 500px;">
                <img src="{{ asset('storage/'.$member->profile_img) }}" alt="" class="rounded" style="width: 100px; height: 100px; object-fit: cover;">
                
                <div class="card-body d-flex flex-column justify-content-between ms-3 flex-grow-1">
                    <div class="mb-2">
                        <h5 class="card-title fw-bold mb-1">{{ $member->role->role }}</h5>
                        <p class="card-text text-muted mb-0">{{ $member->first_name }} {{ $member->last_name }}</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('members.edit', $member) }}" class="btn btn-warning flex-grow-1">Modifica</a>
                        <button type="button" class="btn btn-danger flex-grow-1 delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal" >Cancella</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- Modale Unico -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">ELIMINA MEMBRO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="deleteMessage">Sei sicuro di voler cancellare questo membro? L'operazione è irreversibile.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form method="POST"  action="{{route('members.destroy', $member)}}" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">ELIMINA DEFINITIVAMENTE</button>
                </form>
            </div>
    </div>
</div>

@endsection

