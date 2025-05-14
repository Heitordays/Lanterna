<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página Não Encontrada</title>
    <style>
        body {
            background-color: #132f3b;
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
            color: #1e90ff;
            text-decoration: none;
            font-size: 1.2rem;
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
        <a href="{{ route('tasks.index') }}">Voltar para a página inicial</a>
    </div>
</body>
</html>