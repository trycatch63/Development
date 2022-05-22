@extends('dashboard')

@section('dashboard_main_content')


@endsection

<script !src="">
    document.addEventListener("DOMContentLoaded", function(event) {

        const res= fetch('api/person/feed', {
            method: 'POST',
            headers: {'Content-Type': 'Application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify({
                page_id: 'hello',
            })
        }).then(response=>{
            let newsData = response.json();
            newsData.then((value) => {
                alert("Please check the console")
                console.log(value.person);

            });
        })

    });

</script>








