@extends('master')
@section('title','View a ticket')

@section('content')
		<br>
		<br>
        <div class="container col-md-8 col-md-offset">
                <div class="well well bs-component">
                	<div class="content">
                		<h2 class="header">
                			{!! $ticket->title !!}
                		</h2>
                		<p>
                			<strong>
                				Status
                			</strong>:
                			{!! $ticket->status ? 'Pending' : 'Answered'!!}
                		</p>
                		<p>
                			{!! $ticket->content !!}
                		</p>
                	</div>
                	<a href="{!!action('TicketsController@edit',$ticket->slug)!!}" class="btn btn-info">Edit</a>
                    <br>
                    <br>
<form method="post" action="{!! action('TicketsController@destory',$ticket->slug)!!}" class="pull-left">
                		{{@csrf_field()}}
                		<div class="form-group">
                			<div>
                		<button type="submit" class="btn btn-warning">Delete</button>
                		
                            </div>
                		</div>       		
                	</form>
                	<div class="clear-fix"></div>

                </div>
               
            </div>
        


@endsection
