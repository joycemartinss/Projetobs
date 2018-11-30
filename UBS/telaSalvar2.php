<?php 
// incluindo a autenticacao
include "autenticacaoBD.php";
echo "sim";
    //Recebe os dados com as alterações feitas
    $id = $_POST["id"];
    $novaData = $_POST["data"];
    $novoServico = $_POST["servicos"];
    $novoTurno = $_POST["turno"];
    $novaVagas = $_POST["vagas"];
    
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