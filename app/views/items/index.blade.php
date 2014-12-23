@extends('layouts.master')

@section('content')

	<div class="row">
    <div class="col-lg-6">
        <div class="page-header">
            <h1>All Items</h1>
        </div>
        <p><form action="/items/create"><button type="submit" class="btn btn-lg btn-success">Create</button></form></p>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Item</th>
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
							<td>{{ $item->price }}</td>
						</tr>
					@endforeach
                   
                </tbody>
            </table>
        </div>
    </div>

@stop