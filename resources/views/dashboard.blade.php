@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Bentornato ') . ucfirst(Auth::user()->name) }}</div>


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Login Effettutato, controlla i link soprastanti per effettuare modifiche') }}

                  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
