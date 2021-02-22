@extends('banner')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="card-body">
                <img src="{{ asset("assets/$articles->image") }}" alt="" class="img img-fluid w-100">
            </div>
            <div class="card-footer w-100">
                <h4>{{ $articles->title }}</h4>
                <p>{{ $articles->description }}</p>
            </div>
            
        </div>
    </div>
@endsection