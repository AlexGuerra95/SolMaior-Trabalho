<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$preco= $_POST["preco"];
$prd = $_POST["guitarra"];


// definições de host, database, usuário e senha
$host = "localhost";
$db   = "instrumentos";
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error($con), E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysqli_select_db($con, $db);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("INSERT into produtos values (' ', '$id', 
'$nome', '$preco','$descricao' '$guitarra')");
// executa a query
$dados = mysqli_query($con, $query) or die(mysqli_error($con));


header("Location: SOL.html");
//liberando os dados resultantes
// fechando conexão com banco
mysqli_close($con);
?>