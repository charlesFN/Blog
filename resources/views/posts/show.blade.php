@extends('layouts.layout')

@section('menu')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>

    <p>Adicionado {{ $post->created_at->diffForHumans() }}</p>

    <h4><em>Comentários</em></h4>

    @forelse ($post->comments as $comment)
        <p>
            {{ $comment->content }} }}
        </p>
        <p class="text-muted">
            adicionado {{ $comment->created_at->diffForHumans() }}
        </p>
        <p>
            <hr>
        </p>
    @empty
        <p>Não há comentários!</p>
    @endforelse
@endsection