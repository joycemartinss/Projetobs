<?php 
// incluindo a autenticacao
include "autenticacaoBD.php";
echo "sim";
    //Recebe os dados com as alterações feitas
    $id = $_POST["id"];
    $novaData = filter_input(INPUT_POST, 'data');
    $novoServico = filter_input(INPUT_POST, 'servicos');
    $novoTurno = filter_input(INPUT_POST, 'turno');
    $novaVagas = filter_input(INPUT_POST, 'vagas');

    echo $id;
    echo $novaData;
    echo $servicos;
    echo $novoTurno;
    echo $novaVagas;
    
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "ubss";

    
    
    
            
    
    
    //Executa a atualização no banco de dados
    $sql = "UPDATE agendamento SET data='" . $novaData . "', servicos='" . $novoServico . "', turno='" . $novoTurno . "', vagas='" . $novaVagas . "' WHERE id=".$id;
    $update = mysqli_query($conn, $sql);

    //Se não deu certo, redireciona pra tela.php com alteracao igual a false
    if( !$update ){
        echo "sim";
        header("Location:telaAgendamentoAdmin.php?alteracao=false");
        exit;
    }

    //se tudo deu certo, redireciona pra tela.php com alteracao igual a true
    header("Location:telaAgendamentoAdmin.php?alteracao=true");
?>