<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="finalizaCompra.php" method="post">
    <div>
        <label for="nome">Nome: </label>
        <input class="entrada" type="text" placeholder="Digite seu nome" name="nome" />
      </div>
      <input type="hidden" name="produto" value="<?php if (isset($_GET["instrumentos"])) echo $_GET["guitarra"];?>"/>
      <input type="hidden" name="qtd" value="<?php if (isset($_GET["qtd"])) echo $_GET["qtd"];?>"/>
      <input type="submit" value="Finalizar compra"/>
    </form>
</body>
</html>