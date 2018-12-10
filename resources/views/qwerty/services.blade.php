@extends('layout')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    <ul>
    @forelse($services as $service)
        <li>{{ $service }}</li>
    @empty
        <p>Нет услуг</p>
    @endforelse
    </ul>

    <ul>
        @forelse($posts as $post)
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->create_at }}</p>
            <p>{{ $post->content }}</p>
            <hr>
        @empty
            <p>Нет постов</p>
        @endforelse
    </ul>
@endsection