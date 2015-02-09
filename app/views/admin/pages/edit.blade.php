@extends ('admin.layouts.master')

@section ('head-title')
	Edit book info
@stop

@section ('body-content')

@if (Session::has('error'))
<div class="container">
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
</div>
@endif

@if (Session::has('message'))
<div class="container">
    <div class="alert alert-success">{{ Session::get('message') }}</div>
</div>
@endif

<div class="container">
	<h1>Edit Book Info</h1>
	<hr>
</div>

<div class="container">
	
	{{  Form::open([
			'route' => [ 'admin.books.edit.put', $book->id ],
			'method' => 'PUT'
		])
	}}
		
		<div class="form-group">
			<label for="title">Book Title</label>
			<input type="text" class="form-control" name="title" required="true" value="{{ $book->title }}">
		</div>

		<div class="form-group">
			<label for="coverimg">Book Cover Image URL</label>
			<input type="text" class="form-control" name="coverimg" required="true" value="{{ $book->coverimg }}">
		</div>

		<button class="btn btn-success">Update Book</button>
	{{ Form::close() }}

</div>

@stop