<!DOCTYPE html>
<html>
<head>
    <title>Show Post</title>
</head>
<body>
    <h1>{{ $post->nama }}</h1>
    <p>{{ $post->content }}</p>
    @foreach ($post->images as $image)
        <img src="{{ asset('storage/' . str_replace('public/', '', $image->path)) }}" alt="{{ $post->nama }}" style="width: 300px; height: auto;">
    @endforeach
    <p><a href="{{ $post->googlemaps }}" target="_blank">Lihat di Google Maps</a></p>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
</body>
</html>
