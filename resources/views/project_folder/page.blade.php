@extends('dashboard')

@section('dashboard_main_content')

    <div class="row">
        <div class="offset-lg-3 col-lg-6 offset-lg-3">
            <form  method="POST" action="{{ route('page.create') }}">
                @csrf
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Page Name</label>
                    <input type="text" class="form-control" name="page_name"  id="page_name" placeholder="Page Name">
                </div>

                <button type="submit" class="btn btn-primary">Create Page</button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid is on dashboard not here -->


@endsection








