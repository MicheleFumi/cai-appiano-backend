@extends('layouts.app')

@section('content')

<div class="container my-5">MODIFICA MEMBRO</h2>
    <form action={{route('members.update', $member)}} method="POST" enctype="multipart/form-data">
    @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">Nome</label>
            <input type="text" name="first_name" id="first_name" value="{{$member->first_name}}" class="form-control" placeholder="" aria-describedby="helpId" />
            <small id="helpId" class="text-muted">Inserisci il nome </small>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Cognome</label>
            <input type="text" name="last_name" id="last_name" value="{{$member->last_name}}" class="form-control" placeholder=""
                aria-describedby="helpId" />
            <small id="helpId" class="text-muted">Inserisci il cognome </small>
        </div>
            <div class="mb-3">
                <label for="category" class="form-label">ruolo</label>
                <select name="role_id" id="role_id" class="form-select">
                    @foreach($roles as $role)
                <option value="{{ $role->id }}" @if($role->id == $member->role_id) selected @endif>
                    {{ $role->role }}
                </option>
            @endforeach
                </select>
                <small id="helpId" class="text-muted">Inserisci il ruolo </small>
            </div>

            <div class="mb-3 d-flex ">
                <div>
                <label for="profile_img" class="form-label">Foto Profilo</label>
                <input class="form-control" name="profile_img" type="file">
                <small id="helpId" class="text-muted">Inserisci la foto profilo </small>
                </div>
                <div class="mx-4">
                    <small id="helpId" class="text-muted"></small>
                    <img src="{{asset('/storage/'.$member->profile_img)}}" alt="" style="width: 5rem">
                </div>
              
            </div>
        
            <button type="submit" class="btn btn-dark">Modifica</button>
    </form>
</div>
@endsection
