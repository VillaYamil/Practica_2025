<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 12 | posts</title>
</head>
<body>
    <a href="/posts">volver a post</a>

    <h1>Titulo: {{$post->title}}</h1>
    <p><b>Categoria:</b>{{$post->category}}</p>
    <p>{{$post->content}}</p>
    <br>
    <a href="/posts/{{$post->id}}/edit">Actualizar Post</a>
    <br>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar Post</button>
    </form>
</body>
</html>