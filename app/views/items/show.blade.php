@extends('layouts.master')

@section('content')
	<div class="page-header">
        <h1>{{ $item->name }} </h1>
    </div>
    <p><form action="#"><button type="submit" class="btn btn-lg btn-default">Edit</button></form></p> 
    <p>{{ Form::open(array('route' => array('items.destroy', $item->id), 'method' => 'delete')) }}
        <button type="submit" class="btn btn-lg btn-danger">Delete</button>
    {{ Form::close() }}</p>

    <div class="row">
	    <div class="col-lg-6">
	        <div class="table-responsive">
	            <table class="table table-bordered table-hover">
	                <thead>
	                    <tr>
	                        <th>Condition</th>
	                        <th>Color</th>
	                        <th>Price</th>
	                        <th>Owner</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<tr>
		                	<td>{{ $item->condition }}</td>
		                	<td>{{ $item->color }}</td>
		                	<td>${{ $item->price }}</td>
		                	<td><a href="{{ route('users.show', ['users' => $user->id]) }}">{{ $user->email }}</a></td>
	                	</tr>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>

@stop