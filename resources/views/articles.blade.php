@extends('layouts.app')

@section('content')
    <div>
        <h2>Liste des articles</h2>
        @if($posts->count() > 0)
            @foreach($posts as $post)
            <h3><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
            @endforeach
        @else
            <p>Aucun post dans la base de donnees</p>
        @endif
    </div>
@endsection
