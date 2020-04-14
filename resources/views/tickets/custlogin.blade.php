@extends('master')
@section('title','Login')

@section('content')
    <br>
    <br>

<div class="container col-md-8 col-md-offset-3 box">
    <div class="well well bs-component">
             
            <form class="form-horizontal" method="post" action="{{url('/custlogin')}}">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error}}</p>
                @endforeach
                    
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                @endif

                @if(session('statusLoginError'))
                    <div class="alert alert-danger">
                        {{ session('statusLoginError')}}
                    </div>
                @endif
                {!! csrf_field()!!}
              <fieldset>
                <legend>User Login</legend>
                <div class="form-group">
                  <label for="name" class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                  </div>
                </div>
   
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-6">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-md-offset-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                </fieldset>
                

            </form>
                        

    </div>
</div>

            
@endsection