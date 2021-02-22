@extends('banner')

@section('content')
    <div class="container">
        <div class="card-body shadow">
            <form method="POST" action="/login/success">
                {{ csrf_field() }}
                <div>
                    <div class="form-group">
                        <label for="inputRole" class="">Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="Member">Member</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-dark">Login</button> <a class="ml-2" href="">Forgot your password?</a>

            </form>
        </div>
    </div>
@endsection
