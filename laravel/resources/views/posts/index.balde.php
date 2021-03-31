@extends('layout.app')

@section('content')

@foreach ($posts as post)
    <div class="card mb-3">
        <div class="card-header">{{ $post->id}}</div>
        <div class="card-body">
            <h5 class="card-title">{{ $posts->title }}</h5>
            <p class="card-text">{{ $posts->content }}</p>
        </div>
    </div>
@endforeach

@endsection