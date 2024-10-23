<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label class="form-label" for="title">Titre</label>
        <input class="form-control" type="text" name="title" value= "{{ old('title', $post->title) }}">
        @error('title')
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="slug">Slug</label>
        <input class="form-control" type="text" name="slug" value= "{{ old('slug', $post->slug) }}">
        @error('slug')
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="content">Contenu</label>
        <textarea class="form-control" name="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
        @error('content')
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-primary">
            @if ($post->id)
                Modifier
            @else
                Creer
            @endif
        </button>
    </div>

</form>
