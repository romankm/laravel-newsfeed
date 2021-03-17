
@extends('layout')

@section('content')
    <div class="card-body">
        <form action="{{ route('newsItems.update', $newsItems->id) }}" >
            @crfs

        </form>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">

            </div>
            <div class="pull-right">
                <a href="{{ route('newItems.create') }}" class="btn btn-lg">Create</a>
            </div>
        </div>
    </div>
@endsection