@extends('layouts.layout')

@section('titulo', 'Blog - Novo Post')

@section('menu')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        @include('posts._form')
        <button class="btn btn-success btn-block" type="submit">Criar</button>
    </form>
@endsection