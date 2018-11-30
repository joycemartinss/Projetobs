 <!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title> Cadastro Realizado como Sucesso</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="https://getbootstrap.com.br/docs/4.1/examples/sticky-footer/sticky-footer.css" rel="stylesheet">
  </head>

  <body class="d-flex flex-column h-100">
      <?php
// incluindo a autenticacao
include "autenticacaoBD.php";

// Coletar os dados digitadosm pelo usuário
$nome = $_POST['nome'];
$sus = $_POST['sus'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numeroCasa = $_POST['numeroCasa'];
$bairro = $_POST['bairro'];
$quantidadeMoradores = $_POST['quantidadeMoradores'];
$telefone = $_POST['telefone'];
$padrao="@ubs.com";

$email=$nome.$padrao;
$senha=$sus;

mysqli_select_db($conn, "pacientes"); //código para capturar a tabela posts

$result = mysqli_query($conn, 'SELECT `id`, `nome`, `sus`, `cep`, `rua`, `numeroCasa`, `bairro`, `quantidadeMoradores`, `telefone`, `reg_date` FROM `pacientes` WHERE 1');

$controle = true;
        // É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
//if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
   /* while($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
	if($nome == $row["nome"]){
            $novaQuantidadeBanco = $row['quantidade'] + $quantidade;
            $idBacanco = $row["id"];
            $sql = "UPDATE pacientes SET quantidade='$novaQuantidadeBanco' WHERE $idBacanco";
            mysqli_query($conn, $sql);
            $controle = false;
        }
    }
}*/
// código SQL
if($controle){
    $sql = "INSERT INTO pacientes (nome, sus, cep, rua, numeroCasa, bairro, quantidadeMoradores, telefone,email,senha)VALUES ('$nome', '$sus', '$cep', '$rua','$numeroCasa','$bairro','$quantidadeMoradores','$telefone','$email','$senha')"; 
}

// Executando o código SQL
if (mysqli_query($conn, $sql)) {
 
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechando a conexão com o banco de dados
mysqli_close($conn);


?>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
      <div class="container">
        <h1 class="mt-5">Seu cadastro foi um sucesso  </h1>
        <h2 class="mt-5">Login:</h2>
        <h3 class="mt-5"><?php echo $email;?> </h3>
        <h2 class="mt-5">Senha:</h2>
        <h3 class="mt-5"><?php echo $senha;?> </h3>
        <p> <a href="telaInicial.php">Clique para voltar ao inicio!</a></p>
      </div>
    </main>

    <footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted"></span>
      </div>
    </footer>
  </body>
</html>
