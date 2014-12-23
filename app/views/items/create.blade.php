@extends('layouts.master')

@section('content')
	<div class="page-header">
        <h1>Create Item</h1>
    </div>
    
    @if($errors->has())
	   @foreach ($errors->all() as $error)
	      <div>{{ $error }}</div>
	  @endforeach
	@endif

    {{ Form::open(array('action' => 'ItemController@store')) }}
		<div class="row">
	        <div class="col-lg-6">
				<div class="form-group">
			        <input class="form-control" name="name" placeholder="Item Name">
			    </div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
			        <input class="form-control" name="color" placeholder="Item Color">
			    </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
	                <label>Condition</label>
	                <select name="condition" class="form-control">
	                    <option>New</option>
	                    <option>Refurbished</option>
	                    <option>Used</option>
	                    <option>Damaged</option>
	                </select>
	            </div>
			</div>
			<div class="col-lg-6">
				<label>Price</label>
				<div class="form-group input-group">
	                <span class="input-group-addon">$</span>
	                <input name="price" type="text" class="form-control">
	                <span class="input-group-addon">.00</span>
	            </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
	                <label>Owner</label>
	                <select name="owner" class="form-control">
	                    @foreach($users as $user)
	                    	<option value="{{ $user->id }}">{{ $user->email }}</option>
	                    @endforeach
	                </select>
	            </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<button type="submit" class="btn btn-default" type="button">Create</button>
			</div>
		</div>
	{{ Form::close() }}

@stop