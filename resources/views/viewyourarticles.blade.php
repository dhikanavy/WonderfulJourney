@extends('banner')

@section('content')
    <div class="container">
        <h3 class="text-center mt-3"><strong>Your Articles</strong></h3>
        <div class="row">
            @foreach ($article as $item)
                <div class="card my-4">
                    <div class="w-100"
                        style="height: 15rem; background-image: url({{ asset("assets/$item->image") }}); background-size: cover;">
                    </div>
                    <div class="card-body" style="min-height: 9rem">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text" style="min-height: 5rem">{{ $item->description }}</p>
                    </div>
                    <div class="card-footer btn-group">
                        <a href="/deleteblog/{{ $item->id }}" class="btn btn-dark">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection