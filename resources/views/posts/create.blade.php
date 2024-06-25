create posts
@extends('layouts.index')

@section('content')
<h5>FORM</h5>
<form method='post' action='{{ url('/store') }}'class='form-control' style="height: 300px ; width:400px;" enctype='multipart/form-data'>
    @csrf
<div class="mb-3" >
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tittle" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
  </div>
  <div class="mb-3">
    <input type="file" name="cover_image">
  </div>

  <button type="submit" id="submit">Submit</button>
</form>
 <script>
    const element = document.getElementById("submit");
    element.addEventListener("click", myFunction);
    function myFunction(){
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
});

    }
 </script>



@endsection
