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
$sql = "CREATE TABLE pacientes (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nome VARCHAR(30) NOT NULL,
sus INT(11) NOT NULL,
cep INT(8) NOT NULL,
rua VARCHAR(50) NOT NULL,
numeroCasa VARCHAR(6) NOT NULL,
bairro VARCHAR(30) NOT NULL,
quantidadeMoradores INT(20) NOT NULL,
telefone INT(11) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "A tabela Pacientes foi criada com sucesso";
} else {
    echo "Erro na criação da tabela: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
    </body>
</html>