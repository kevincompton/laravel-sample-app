@extends('layouts.master')

@section('content')
	<div class="page-header">
        <h1>{{ $user->email }}</h1>
    </div>
    <p>{{ Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete')) }}
        <button type="submit" class="btn btn-lg btn-danger">Delete</button>
    {{ Form::close() }}</p>


    <div class="page-header">
        <h1>Owned Items</h1>
    </div>

    <div class="row">
	    <div class="col-lg-6">
	        <div class="table-responsive">
	            <table class="table table-bordered table-hover">
	                <thead>
	                    <tr>
	                    	<th>Name</th>
	                        <th>Condition</th>
	                        <th>Color</th>
	                        <th>Price</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($items as $item)
	                	<tr>
	                		<td><a href="{{ route('items.show', ['items' => $item->id]) }}">{{ $item->name }}</a></td>
							<td>{{ $item->condition }}</td>
							<td>{{ $item->color }}</td>
		                	<td>${{ $item->price }}</td>
						</tr>
						@endforeach
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
	
@stop