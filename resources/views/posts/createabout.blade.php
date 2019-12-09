@extends('layouts.app')

@section('content')
<header class="masthead" style="background-image: url('/image/bg.jpg');">
    <div class="container" style="height: 100px;">
    </div>
</header>





<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h1 class="card-title text-center">INSERT</h1>
            <div class="container">
            <form action="/storeabout" method="get" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h4>TITLE</h4>
                <input class="btn btn-warning" type="text" name="title" placeholder="Specify Title">
                <h4>DESCRIPTION</h4>
                <textarea class="btn btn-warning" name="content" cols="30" rows="10"> </textarea>
                <h4>SELECT IMAGE</h4>
                <input type="file" name="path">
                <input type="submit" value="Save"  class="btn btn-warning">
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

@endsection






