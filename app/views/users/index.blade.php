@extends('layouts.master')

@section('content')
	<h1>Users</h1>
	<div class="row">
        <div class="col-sm-4">
            <ul class="list-group">
			@foreach($users as $user)
				<li class="list-group-item"><a href="{{ route('users.show', ['users' => $user->id]) }}">{{ $user->email }}</a></li>
			@endforeach
			</ul>
		</div>
	</div>
@stop