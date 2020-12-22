@extends('layouts.app')

<title>Blog - Editar Post</title>

@section('content')
    <form method="POST" action="{{ route('posts.update', ['post'=>$post->id]) }}">
        @csrf
        @method('PUT')

        @include('posts._form')
        <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
    </form>
@endsection