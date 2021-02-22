@extends('banner')

@section('content')
    <div class="container w-100 mt-3">
        
        {{-- @guest

            @else
            @if (Auth::user()->role == 'Member')
                <h3 class="text-center">Welcome, {{ Auth::user()->name }}!</h3>
                <p class="text-center">Category: {{ $category->name }}</p>
                <div class="row">
                    {{ dd($articles) }}
                    @foreach ($articles as $item)
                        <div class="col-lg-4 text-center">
                            <div class="card my-4">
                                <div class="w-100"
                                    style="height: 15rem; background-image: url({{ asset("assets/$item->image") }}); background-size: cover;">
                                </div>
                                <div class="card-body" style="min-height: 9rem">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text" style="min-height: 5rem">{{ $item->description }}</p>
                                    <a href="/articledetail/{{ $item->id }}" class="btn btn-dark">See Detail</a>
                                </div>
                            </div>   
                        </div>
                    @endforeach
                </div>
            @endif   
        @endguest --}}
        @foreach ($articles as $item)
        <div class="col-lg-4 text-center">
            <div class="card my-4">
                <div class="w-100"
                    style="height: 15rem; background-image: url({{ asset("assets/$item->image") }}); background-size: cover;">
                </div>
                <div class="card-body" style="min-height: 9rem">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text" style="min-height: 5rem">{{ $item->description }}</p>
                    <a href="/articledetail/{{ $item->id }}" class="btn btn-dark">See Detail</a>
                </div>
            </div>   
        </div>
        @endforeach
    </div>
@endsection
