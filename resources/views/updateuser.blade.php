@extends('banner')

@section('content')
<div class="container">
    <div class="card-body shadow">
        <form method="POST" action="/updatesuccess">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail" class="">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="inputEmail" class="">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
          </div>
          
          <div class="form-group">
            <label for="inputEmail" class="">Phone Number</label>
            <input type="numeric" class="form-control" name="phone" aria-describedby="emailHelp">
          </div>

          <button type="submit" class="btn btn-dark">Update</button>
        </form>
    </div>
</div>
@endsection