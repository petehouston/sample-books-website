@extends ('admin.layouts.master')

@section ('head-title')
	Admin Dashboard
@stop

@section ('body-content')
<div class="container-fluid">
    <div class="row">

    	@foreach ($books as $book)
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{ $book->coverimg }}" alt="">
                <div class="caption">
                    <h5>{{ $book->title }}</h3>
                    <p>
                    	<a href="#" class="btn btn-sm btn-info">Edit</a>
                    	<a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
@stop