@extends('layout')

@section('content')
<div class="d-flex align-items-center justify-content-center">
<h1> News: </h1>
</div>

  @foreach($newsItems as $newsItem)
    <div class="card" style="width: 50rem;">
        <div class="card-body">
            <h5 class="card-title">
                <a href='{{ url('news_items') }}'>
                  {{ $newsItem->title }}
                </a>
            </h5>
            <div class="card-subtitle mb-2 text-muted">
              <div>{{ $newsItem->created_at }}</div>
              <div>category:</div>
            </div>
            <p class="card-text">
              {{ $newsItem->body }}
            </p>
        </div>
    </div>
  @endforeach
@endsection
