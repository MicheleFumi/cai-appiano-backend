@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center"> AGGIUNGI MEMBRO</h2>
    <form action={{route('members.store')}} method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">Nome</label>
            <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror"
                   value="{{ old('first_name') }}" placeholder="Inserisci il nome">
            <small id="firstNameHelp" class="text-muted">Inserisci il nome</small>
            @error('first_name')
                <div class="text-danger">{{ 'Inserisci il Nome' }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="last_name" class="form-label">Cognome</label>
            <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror"
                   value="{{ old('last_name') }}" placeholder="Inserisci il cognome">
            <small id="lastNameHelp" class="text-muted">Inserisci il cognome</small>
            @error('last_name')
                <div class="text-danger">{{ 'Inserisci il cognome' }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="role_id" class="form-label">Ruolo</label>
            <select name="role_id" id="role_id" class="form-select @error('role_id') is-invalid @enderror">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                        {{ $role->role }}
                    </option>
                @endforeach
            </select>
            <small id="roleHelp" class="text-muted">Seleziona un ruolo</small>
            @error('role_id')
                <div class="text-danger">{{ 'Seleziona il ruolo' }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="profile_img" class="form-label">Foto Profilo</label>
            <input class="form-control @error('profile_img') is-invalid @enderror" name="profile_img" type="file">
            <small id="profileImgHelp" class="text-muted">Inserisci la foto profilo</small>
            @error('profile_img')
                <div class="text-danger">{{ 'Inserisci un immagine' }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-secondary">Aggiungi</button>

        @endsection
