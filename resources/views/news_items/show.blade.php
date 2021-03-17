@extends('layout')

@section('content')
    <div class="">
        <a href="/"><< BACK</a>
    </div>
    <div class="card" style="width: 50rem;">
        <div class="card-body">
            <h5 class="card-title">
                {{ $newsItem->title }}
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
@endsection