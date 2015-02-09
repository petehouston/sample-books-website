@extends ('admin.layouts.master')

@section ('head-title')
	Admin Dashboard
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

<div class="container-fluid">
    <div class="row">

    	@foreach ($books as $book)
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{ $book->coverimg }}" alt="">
                <div class="caption">
                    <h5>{{ $book->title }}</h3>
                    
                    	<a href="{{ URL::route('admin.books.edit', $book->id) }}" class="btn btn-sm btn-info inline">Edit</a>

                        {{  Form::open([
                                'route' => [ 'admin.books.delete', $book->id ],
                                'method' => 'DELETE',
                                'class' => 'inline'
                            ])
                        }}
                            {{ Form::submit('Delete', [ 'class' => 'btn btn-sm btn-danger'] ) }}
                        {{ Form::close() }}
                    
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
@stop