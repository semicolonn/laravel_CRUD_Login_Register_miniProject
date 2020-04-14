@extends('master')
@section('title','View all tickets')

@section('content')
		<br>
		<br>
		<div class="container col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h2>Tickets</h2>
			</div>

				@if($tickets-> isEmpty())
					<p>There is no ticket.</p>
				@else

				     @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
                        
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>Title</th>
				      <th>Status</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($tickets as $ticket)
				    <tr>
				      <td>{!! $ticket->id !!}</td>
				      <td><a href="{!! action('TicketsController@show', ['slug' => $ticket->slug])!!}" class="btn btn-info">{!! $ticket->title !!}</a></td>
				      
				      <td>{!! $ticket->status ? 'Pending' : 'Answered' !!}</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table> 
</div>
</div>
@endif

@endsection