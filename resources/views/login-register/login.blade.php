
@extends('login-register.master')
@section('title','Login Page')

@section('content')

  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:5px solid lightblue;
    padding: 20px;
   }

  </style>

<br><br>


<div class="container col-md-8 col-md-offset-3 box">

  <!--ERRORS GO HERE-->
     @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
     <!--ERRORS END LINE-->

<form  class="form-horizontal" method="post" action="{{ url('/checklogin') }}">
  {{csrf_field()}}
  <fieldset>
  <div class="col-lg-6">
  <legend>
      Login Details
    
  </legend>
</div>
  <br>
  <div class="form-group">
    <label for="username" class="col-lg-2 control-label">Username</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">

    <label for="password" class="col-lg-2">Password</label>
    <div class="col-lg-8">
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
  </div>

  <div class="col-lg-2">
  <button type="submit" class="btn btn-primary">Login</button>
</div>
</form>
</div>
</fieldset>
@endsection