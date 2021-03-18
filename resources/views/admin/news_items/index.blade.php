@extends('layout')

@section('content')

<a href="/admin/news-items/create" class="btn btn-primary mb-3">Create new</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">1</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Category</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($newsItems as $key => $newsItem)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $newsItem->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($newsItem->body, 30, $end='...') }}</td>
                <td>{{ $newsItem->category ? $newsItem->category->name : '' }}</td>
                <td>{{ $newsItem->created_at }}</td>
                <td>
                    <div class="row list-inline-item">
                        <div class="col-4">
                            <a href="/admin/news-items/{{ $newsItem->id }}/edit" class="btn btn-success">Edit</a>
                        </div>
                        <div class="col-4">
                        <form action="/admin/news-items/{{ $newsItem->id }}" method="POST" >
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger text-nowrap">Delete User</button>
                        </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection