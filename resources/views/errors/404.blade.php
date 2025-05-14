<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/404.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página Não Encontrada</title>
    <style>
    body {
        background: url("{{ asset('images/sonic.jpeg') }}") no-repeat center center fixed;
        background-size: cover; /* Ajusta a imagem para cobrir toda a tela */
        color: #fff;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        text-align: center;
    }
    h1 {
        font-size: 3rem;
    }
    p {
        font-size: 1.5rem;
    }
    a {
        color:rgb(0, 0, 0);
        text-decoration: none;
        font-size: 3rem;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div>
        <h1>Juquera maluco</h1>
        <p>Ops! Parece que você se perdeu.</p>
        <a href="{{ route('tasks.index') }}">Socorro</a>
    </div>
</body>
</html>