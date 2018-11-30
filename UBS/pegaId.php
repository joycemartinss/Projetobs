<?php
 include 'autenticacaoBD.php';
 
 $idDaPessoa=array();
 $idDoServiço=array();
 $contador=0;


$sql = "SELECT `id`, `idAgendamento`, `idDaPessoa`, `reg_date` FROM `agendados` ";
$result = mysqli_query($conn, $sql);

// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    
    while($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        $idDaPessoa[$contador]=$row["idDaPessoa"];
        $idDoServiço[$contador]=$row["idAgendamento"];
        
        $contador++;
	}
} else {
    echo "A tabela Registro está vazia";
}
mysqli_close($conn);

