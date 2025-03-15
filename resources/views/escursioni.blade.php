@extends('layouts.master')
@section('content')
    <x-jumbotron>LE NOSTRE ESCURSIONI</x-jumbotron>
    <div class="container py-3">
        <div class="subtitle my-3">
            <h2>GUIDA ALLE MERAVIGLIE </h2>
        </div>
        <div>
            <iframe src="{{ asset('documents/libretto2025.pdf') }}" class="border border-3 border-black" width="100%"
                height="1000px" type="application/pdf">
            </iframe>
        </div>


        <section>

        </section>
    @endsection
