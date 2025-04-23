<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 12 | posts</title>
</head>
<body>
<h1>Aca se va a editar un post con un formulario</h1>

<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <label>Titulo:
        <input type="text" name="title" value="{{$post->title}}">
    </label>
    <br><br>
    <label>Categoria:
        <input type="text" name="category" value="{{$post->category}}">
    </label>
    <br><br>
    <label>Contenido:
        <textarea name="content">{{$post->content}}</textarea>
    </label>
    <br><br>
    <button type="submit">Actualizar post</button>
</form>
</body>
</html>