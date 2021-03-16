@extends('layout')

@section('content')
  @foreach($newsItems as $newsItem)
    <div class="card" style="width: 50rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $newsItem->title }}</h5>
              <div class="card-subtitle mb-2 text-muted">
                <h6>{{ $newsItem->title }}</h6>
              </div>
            <p class="card-text">{{ $newsItem->body }}</p>
        </div>
    </div>
  @endforeach
@endsection
