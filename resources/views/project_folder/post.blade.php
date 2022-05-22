@extends('dashboard')

@section('dashboard_main_content')

    <div class="row">
        <div class="offset-lg-3 col-lg-6 offset-lg-3">
            Create a Post without Page
            <form action="{{ route('post.create') }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Content</label>
                    <input type="text" class="form-control" name="post_content"  id="post_content" placeholder="Add Post">
                </div>

                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
            Create a Post to a page

            <form action="" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="exampleSelect">Select Page Name</label>
                    <select class="form-control" id="page_id">
                        @foreach($page as $pa)
                            <option value="{{ $pa->id }}">{{$pa->page_name}}</option>
                        @endforeach

                    </select>
                    <label for="exampleInputPassword1">Content</label>
                    <input type="text" class="form-control" name="page_post_content"  id="page_post_content" placeholder="Add Post">
                </div>

                <button type="button" onclick="page_post()" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid is on dashboard not here -->


@endsection

<script !src="">
   function page_post(){
       let page_id=document.getElementById("page_id").value
       let page_post_content=document.getElementById("page_post_content").value
           const res= fetch('api/page/'+page_id+'/attach-post', {
               method: 'POST',
               headers: {'Content-Type': 'Application/json',
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               body: JSON.stringify({
                   page_id: page_id,
                   page_post_content:page_post_content,
               })
           }).then(response=>{
               let newsData = response.json();
               newsData.then((value) => {
                   alert(value.person)
                   console.log(value.person);

               });
           })

    }

</script>








