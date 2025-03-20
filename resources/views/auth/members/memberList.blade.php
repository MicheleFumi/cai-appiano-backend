@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center">LISTA DIRETTIVO</h2>

    <div class="row row-cols-sm-1 row-cols-md-3 row-cols-md-4">
        @foreach ($members as $member)
            <div class="col g-3">
                <div class="card shadow " style="width: 18rem; border: 0px solid transparent !important"> 
                        <img src="{{ asset('storage/'.$member->profile_img) }}" alt="" class="img-fluid rounded">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member->role->role }}</h5>
                        <p class="card-text">{{ $member->first_name }} {{ $member->last_name }}</p>
                        <a href="{{ route('members.show', $member) }}" class="btn btn-outline-secondary text-black">vai al post</a>
                    </div> 
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection

