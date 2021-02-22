@extends('banner')

@section('content')
    <div class="container">
        <h3 class="text-center mt-3"><strong>Add Article</strong></h3>
        <div class="card-body shadow">
            <form method="POST" action="/postarticle" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle" class="">Title</label>
                    <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="inputCategory" class="">Category</label>
                    <select name="category" id="" class="form-control">
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputImage">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <button type="submit" class="btn btn-dark">Post</button>

            </form>
        </div>
    </div>
@endsection