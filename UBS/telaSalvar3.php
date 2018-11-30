<?php

// incluindo a autenticacao
include "autenticacaoBD.php";

//Recebe os dados com as alterações feitas
$id = $_POST["id"];
$novaData = $_POST["data"];
$novoServico = $_POST["servicos"];
$novoTurno = $_POST["turno"];
$novaVagas = $_POST["vagas"];

//Executa a atualização no banco de dados
$sql = "INSERT INTO agendamento ( data, servicos, turno, vagas) VALUES ('$novaData','$novoServico','$novoTurno','$novaVagas')";


//Se não deu certo, redireciona pra tela.php com alteracao igual a false
if (mysqli_query($conn, $sql)) {
    include 'telaAgendamentoAdmin.php';
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>