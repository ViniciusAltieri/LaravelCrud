<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    
    <input type="text" name="nome" value="{{ $produto->nome }}"><label for="nome">Nome:</label>
    <br><br>
    <input type="text" name="valor" value="{{ $produto->valor }}"><label for="valor">Valor:</label>
    <br><br>
    <input type="text" name="estoque" value="{{ $produto->estoque }}"><label for="estoque">Estoque:</label>
    <br><br>
</body>
</html>