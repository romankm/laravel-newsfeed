@extends('layout')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">1</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($newsItems as $key => $newsItem)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $newsItem->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($newsItem->body, 50, $end='...') }}</td>
                <td>{{ $newsItem->created_at }}</td>
                <td>
                    <div class="btn-group">
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection