@extends('dashboard')

@section('dashboard_main_content')

    <div class="row">
        <div class="offset-lg-3 col-lg-6 offset-lg-3">
            <form action="{{ route('auth.register') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="emailHelp" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="emailHelp" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password"  id="password" placeholder="Password">
                </div>


                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid is on dashboard not here -->


@endsection




