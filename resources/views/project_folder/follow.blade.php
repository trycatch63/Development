@extends('dashboard')

@section('dashboard_main_content')

    <div class="row">
        <div class="offset-lg-3 col-lg-6 offset-lg-3">
            Follow a person
            <form action="" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="exampleSelect">Select Person to follow</label>
                    <select class="form-control" id="person">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{$user->first_name}} {{$user->last_name}}</option>
                        @endforeach

                    </select>
                     </div>

                <button type="button" onclick="follow()" class="btn btn-primary">Create Post</button>
            </form>
            Follow a Page
            <form action="" method="POST">
                @csrf

                <div class="form-group mb-2">
                    <label for="exampleSelect">Select Page Name</label>
                    <select class="form-control" id="page_id">
                        @foreach($page as $pa)
                            <option value="{{ $pa->id }}">{{$pa->page_name}}</option>
                        @endforeach

                    </select>
                </div>

                <button type="button" onclick="follow_page()" class="btn btn-primary">Create Post</button>
            </form>

        </div>
    </div>
    <!-- /.container-fluid is on dashboard not here -->


@endsection

<script !src="">
    function follow(){
        let person=document.getElementById("person").value
        const res= fetch('api/follow/person/'+person, {
            method: 'POST',
            headers: {'Content-Type': 'Application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify({
                page_id: person,
            })
        }).then(response=>{
            let newsData = response.json();
            newsData.then((value) => {
                alert(value.person)
                console.log(value.person);

            });
        })

    }
    function follow_page() {
        let page=document.getElementById("page_id").value
        const res= fetch('api/follow/page/'+page, {
            method: 'POST',
            headers: {'Content-Type': 'Application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify({
                page_id: page,
            })
        }).then(response=>{
            let newsData = response.json();
            newsData.then((value) => {
                alert("Please check the console")
                console.log(value.person);

            });
        })
    }

</script>








