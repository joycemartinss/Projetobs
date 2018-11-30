<?php

include "autenticacaoBD.php";

// Selecionar as variaveis
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

$sql = "SELECT `id`, `email`, `senha`, `reg_date` FROM `pacientes` WHERE 1";
$result = mysqli_query($conn, $sql);

$controle = true;
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        if ($row["email"] == $matricula && $row["senha"] == $senha){
           $controle = false;
            $id = $row["id"];
            header("Location:telaAgendamentoPaciente.php?id=$id");
            
            }
    }
}else {
    echo "Erro - nenhum paciente cadastrado";
}
if ($controle){
  
    echo "SENHA INCORRETA";
}
?>