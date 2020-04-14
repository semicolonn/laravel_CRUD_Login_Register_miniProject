@extends('login-register.master')
@section('title','Register')

@section('content')
    <br>
    <br>
<div class="container col-md-8 col-md-offset-3">
    <div class="well well bs-component">
             
            <form class="form-horizontal" method="post">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error}}</p>
                @endforeach
                    
                {!! csrf_field()!!}
              <fieldset>
                <legend>Register an account</legend>
                <div class="form-group">
                  <label for="name" class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('name')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                  	<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}">
                  
                 </div>

            </div>
                <div class="form-group">
                	<label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                    	<input type="password" name="password" class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                	<label for="password" class="col-lg-6 control-label">Confirm password</label>
                
                <div class="col-lg-10">
                	<input type="password" name="password_confirmation" class="form-control">
                </div>
                </div>
                <div class="form-group">
                	<div class="col-lg-10 col-md-offset-2">
                		<button type="reset" class="btn btn-default">Cancel</button>
                		<button type="submit" class="btn btn-primary">Submit</button>
                	</div>
                </div>
                </fieldset>
                

            </form>
                        

    </div>
</div>

            
@endsection