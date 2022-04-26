<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <form action="/editar-produto/{{ $produto-> id }}" method="POST">
        @csrf
        <label for="nome"> Nome:
            <input type="text" name="nome" value="{{ $produto->nome }}">
        </label>
        <br><br>
        <label for="valor"> Valor:
            <input type="text" name="valor" value="{{ $produto->valor }}">
        </label>
        <br><br>
        <label for="estoque"> Quantidade:
            <input type="text" name="estoque" value="{{ $produto->estoque }}">
        </label>
        <br><br>
        <button>Cadastrar</button>
    </form>

</body>
</html>