@extends ('layouts.master')

@section ('head-title')
	Search book
@stop

@section ('body-content')

<div class="container">
    <h1>Search Books</h1>
    <hr>
</div>

<div class="container">
    {{  Form::open([
            'route' => [ 'search.post' ],
            'method' => 'POST'
        ])
    }}
        <div class="form-group">
            <label for="search">Search title:</label>
            <input type="text" class="form-control" name="title">
        </div>

        <button class="btn btn-info">Search</button>
    {{ Form::close() }}
</div>

<div class="container">
    <hr>

    @if (isset($books) && $books)
    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{ $book->coverimg }}" alt="">
                <div class="caption">
                    <h5>{{ $book->title }}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

</div>
@stop