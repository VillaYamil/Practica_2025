<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 12 | posts</title>
</head>
<body>
<h1>Aca se va a mostrar un formulario</h1>

<form action="/posts" method="POST">
    @csrf
    <label>Titulo:
        <input type="text" name="title">
    </label>
    <br><br>
    <label>Categoria:
        <input type="text" name="category">
    </label>
    <br><br>
    <label>Contenido:
        <textarea name="content"></textarea>
    </label>
    <br><br>
    <button type="submit">Enviar</button>
</form>
</body>
</html>