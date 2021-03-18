@extends('layout')

@section('content')
    <div class="">
        <a href="{{ route('root') }}"><< BACK</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                {{ $newsItem->title }}
            </h5>
            <div class="card-subtitle mb-2 text-muted">
                <div>{{ $newsItem->created_at }}</div>
                <div>category: {{ $newsItem->category->name }}</div>
            </div>
            <p class="card-text">
                {{ $newsItem->body }}
            </p>
        </div>
    </div>
@endsection