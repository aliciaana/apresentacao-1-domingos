<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padrão de Projeto - Domingos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color:rgb(255, 0, 0);
        }
        p {
            margin-top: 10px;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Olá, {{ $nome }}</h1>
        <p>Bem-vindo!</p>
    </div>
</body>
</html>

<?php if(isset($scripts)) :?> 
    @foreach($scripts as $script)
        <script src="/../{{ $script }}"></script>
    @endforeach
<?php endif; ?>