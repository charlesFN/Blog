@extends('layouts.app')

<title>Blog - Novo Post</title>

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        @include('posts._form')
        <button class="btn btn-success btn-block" type="submit">Criar</button>
    </form>
@endsection