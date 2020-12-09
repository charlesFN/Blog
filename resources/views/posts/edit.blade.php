@extends('layouts.layout')

@section('titulo', 'Blog - Editar Post')

@section('menu')
    <form method="POST" action="{{ route('posts.update', ['post'=>$post->id]) }}">
        @csrf
        @method('PUT')

        @include('posts._form')
        <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
    </form>
@endsection