<?php
// Informações de conexão com o banco de dados
$hostname = 'localhost';
$database = 'instrumentos';

$mysqli = new mysqli($localhost, $meu_banco_de_dados);

if ($mysqli->connect_error) {
    die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}
$produto = "guitarra";

$sql = "SELECT * FROM produtos WHERE nome = ''$guitatra";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // Produto encontrado
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["guitarra"] . "<br>";
        echo "Preço: " . $row["300R$"] . "<br>";
        echo "Descrição: " . $row[""] . "<br>";
    }
} else {
    // Produto não encontrado
    echo "Produto não encontrado.";
}

// Fechando a conexão com o banco de dados
$mysqli->close();
?>