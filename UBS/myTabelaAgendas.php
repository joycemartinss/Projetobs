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
$dbname = "ubss";

// Criando a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificando a conexão com o banco  de dados
if (!$conn) {
    die("A conexão com o BD falhou: " . mysqli_connect_error());
}

// Código SQl para criar a tabela
$sql = "CREATE TABLE agendas (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
servicos VARCHAR(30) NOT NULL,
vagasV DOUBLE NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "A tabela agendas foi criada cm sucesso";
} else {
    echo "Erro na criação da tabela: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
    </body>
</html>