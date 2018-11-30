<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
$servername = "localhost";
$username = "root";
$password = "12345";

// Criando a conexão
$conn = mysqli_connect($servername, $username, $password);

// Checando se a conexão está fucnionando
if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}

// Criando o banco de dados
$sql = "CREATE DATABASE UBSS";

if (mysqli_query($conn, $sql)) {
    echo "Banco de dados ubss criado com sucesso";
} else {
    echo "Erro na criação do banco de dados: " . mysqli_error($conn);
}

// Fechando a conexão com o servidor de banco de dados
mysqli_close($conn);
?>
    </body>
</html>