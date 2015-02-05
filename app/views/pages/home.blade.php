@extends ('layouts.master')

@section ('head-title')
	Books Library Homepage
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
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>

@stop