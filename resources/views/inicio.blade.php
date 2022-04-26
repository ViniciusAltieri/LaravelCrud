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

    <form action="/cadastrar-produto" method="POST">
        @csrf
        <label for="txt1">Nome:</label>
            <input id="txt1" type="text" name="nome">
            <br><br>
        <label for="txt2">Valor:</label>
            <input id="txt2" type="text" name="valor">
            <br><br>
        <label for="txt3">Quantidade</label>
            <input id="txt3" type="text" name="estoque">
            <br><br>
        <button type="submit">Cadastrar</button>
    </form>

</body>

</html>