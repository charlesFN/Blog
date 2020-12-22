@extends('layouts.app')

<title>Blog - Todos os Posts</title>

@section('content')
    <h2>Posts</h2>
    <div class="card-columns">
        @forelse($posts as $post)
            <div class="card my-2" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title"><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h5>
                <p class="card-text">{{ $post->content }}</p>
                <form method="POST" class="fm-inline" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                    <p>Adicionado em {{ $post->created_at->format('d/m/y') }}</p>
            
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">
                        Editar
                    </a>
            
                        @csrf
                        @method('DELETE')
            
                        <input class="btn btn-danger" type="submit" value="Apagar">
                    </form>
                </div>
            </div>
        @empty
            <p>Não há nenhum post</p>
        @endforelse
    </div>
@endsection