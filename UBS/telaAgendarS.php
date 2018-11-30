<?php

// incluindo a autenticacao
include "autenticacaoBD.php";
$idA  = $_POST['idA'];
$idP  = $_POST['idP'];

$sql = "SELECT `id`, `data`, `servicos`, `turno`, `vagas`, `reg_date` FROM `agendamento` WHERE id=$idA";
 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while($row = mysqli_fetch_assoc($result)) {
        if ($row['vagas'] > 0){
            $vagasnovo = $row['vagas'] - 1;
            $sql = "UPDATE `agendamento` SET `vagas`=$vagasnovo WHERE id=$idA";
            mysqli_query($conn, $sql);
            $sql = "INSERT INTO `agendados`(`idAgendamento`, `idDaPessoa`) VALUES ($idA, $idP)";
            mysqli_query($conn, $sql);
            header("Location:telaAgendamentoPaciente.php?id=$id");
        }
    }
}else {
    echo "Nao temos mais vagas disponiveis";
}