@extends('layouts.master')

@yield('content')
<div class="container py-4">
    <h2 class="text-center">LISTA DIRETTIVO</h2>

    <div class="row">

        @foreach ($members as $member)
            <div class="col-md-3 g-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($member->profile_img) }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member->role->role }}</h5>
                        <p class="card-text">{{ $member->first_name }} {{ $member->last_name }}</p>
                        <a href="#" class="btn btn-warning">modifica</a>
                        <a href="#" class="btn btn-danger">elimina</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
