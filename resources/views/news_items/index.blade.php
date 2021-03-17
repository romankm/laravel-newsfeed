@extends('layout')

@section('content')
    <div class="row">
    <div class="d-flex align-items-center justify-content-center">
        <h1> News: </h1>
    </div>
        <div class="col-3">
            <div class="card">
                <div class="container">
                    <form method="GET" action="/">
                        <label for="category" class="form-label mt-3">Category</label>
                        <select name="category" class="form-select mb-3">
                            <option selected>category</option>
                            @foreach($categories as $key => $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary col-sm-12 mb-3">filter</button>
                        {{--<button type="reset" class="btn btn-primary col-sm-12 mb-3">reset</button>--}}
                    </form>
                    <form method="GET" action="/">
                        <button type="submit" class="btn btn-primary col-sm-12 mb-3">clear</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-9">
            @foreach($newsItems as $newsItem)
                <div class="card mb-1" >
                    <div class="card-body">

                        <h5 class="card-title">
                            <a href='{{ url('news-items' . '/' . $newsItem->id) }}'>
                                {{ $newsItem->title }}
                            </a>
                        </h5>
                        <div class="card-subtitle mb-2 text-muted">
                            <div>{{ $newsItem->created_at }}</div>
                            <div>
                                @if($newsItem->category)
                                    {{ $newsItem->category->name }}
                                @endif
                            </div>
                        </div>
                        <p class="card-text">
                            {{ $newsItem->body }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection