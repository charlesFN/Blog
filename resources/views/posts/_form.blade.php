<div class="form-group">
    <label>Título</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $post->title ?? NULL ) }}">
     
</div>

<div class="form-group">
    <label>Conteúdo</label>
    <input type="text" name="content" class="form-control" value="{{ old('content', $post->content ?? NULL ) }}">
</div>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif