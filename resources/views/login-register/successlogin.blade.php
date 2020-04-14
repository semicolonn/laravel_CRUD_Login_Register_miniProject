  

@extends('login-register.master')
@section('title','Dashboard')

@section('content')


  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Simple Login System in Laravel</h3><br />


    <div>

     <a href="{{ url('/logout') }}">Logout</a>
    </div>
   
   <br />
  </div>

  @endsection