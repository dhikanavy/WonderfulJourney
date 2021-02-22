@extends('banner')

@section('content')
    <div class="container w-100 mt-3">
        @guest
            <div class="row">
                <div class="col-lg-4 text-center">
                    <p>Pantai</p>
                    @foreach ($articles as $item)
                        @if ($item->categoryid == 1)
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
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-4 text-center">
                    <p>Gunung</p>
                    @foreach ($articles as $item)
                        @if ($item->categoryid == 2)
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
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-4 text-center">
                    <p>Gurun</p>
                    @foreach ($articles as $item)
                        @if ($item->categoryid == 3)
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
                        @endif
                    @endforeach
                </div>
            </div>
            {{-- member and admin --}}
        @else
            @if (Auth::user()->role == 'Member')
                <h3 class="text-center">Welcome, {{ Auth::user()->name }}!</h3>
                <div class="text-center">
                    <a href="/viewaddarticle" class="btn btn-dark">Post Article</a>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <p>Pantai</p>
                        @foreach ($articles as $item)
                            @if ($item->categoryid == 1)
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
                            @endif
                        @endforeach
                    </div>
                    <div class="col-lg-4 text-center">
                        <p>Gunung</p>
                        @foreach ($articles as $item)
                            @if ($item->categoryid == 2)
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
                            @endif
                        @endforeach
                    </div>
                    <div class="col-lg-4 text-center">
                        <p>Gurun</p>
                        @foreach ($articles as $item)
                            @if ($item->categoryid == 3)
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
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
            @if (Auth::user()->role == 'Admin')
                <p class="text-center"><strong>User List</strong></p>
                <div class="row">
                    @foreach ($users as $item)
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card shadow mx-2 my-2">
                                    <div class="card-body p-4">
                                        <p class="card-text">Name : {{ $item->name }}</p>
                                        <p class="card-text">Email : {{ $item->email }}</p>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <form action="/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="btn btn-dark">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        @endguest
    </div>
@endsection
