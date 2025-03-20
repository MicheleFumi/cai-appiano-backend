@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">LISTA RUOLI</h2>
    <div class="text-center mb-4">
        <a href="{{route('roles.create')}}" class="btn btn-secondary">AGGIUNGI RUOLO</a>
       
    </div>
    <ul class="list-group list-group-flush w-50 mx-auto">
        @foreach ($roles as $role)
            <li class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                <h5 class="mb-0">{{ $role->role }}</h5>
                <a href="{{ route('roles.edit', $role) }}" class="btn btn-secondary">Modifica/Cancella</a>
            </li>
        @endforeach
    </ul>
    
    
</div>


@endsection

