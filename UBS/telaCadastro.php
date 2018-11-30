<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro-UBS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-primary  bg-primary  fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#"><font color='white'><b>Cadastro</b></font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4"><font color='white'><b>Vendas</b></font></h1>
          <div class="list-group">
             <a href="telaInicial.php" class="list-group-item">Inicio</a>
             <a href="telaAgendamentoAdmin.php" class="list-group-item">Agendamento</a>
             <a href="telaCadastro.php" class="list-group-item">Cadastros</a>
             <a href="telaRelatorio.php" class="list-group-item">Relatório</a>
            </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  


<div class="container mt-3">


          <div class="card card-outline-secondary my-4">
            <div class="card-header">
                <center>  <h2><b>Cadastrar Pacientes</b> </center>
            </div>
              
            <div class="card-body">
                <center><form method="post" action="telaCadastroS.php">
                    
             <b> Nome: </b>      
             <input type="text" required="required" name="nome" >      
             <br>
             <br>
             <b> N° SUS:</B>
             <input type="number" required="required" name="sus">
             <br>
             <br>
             <b>CEP: </b>
              <input type="text" required="required" name="cep" >
              <br>
              <br>
            <b>Rua:</b>
            <input type="text" required="required" name="rua" > 
            <br>
            <br>
            <b>N° da Casa: </b> 
            <input type="number" required="required" name="numeroCasa" >
            <br>
            <br>
            <b> Bairro: </b>
            <select name="bairro">
            <option value="malvinas">Malvinas</option>
            <option value="presidente">Presidente Médici</option>
        </select>
           <br>
           <br>
            <b> Q° Moradores: </b>
             <input type="number" required="required" name="quantidadeMoradores" >
             <br>
           <br>
        <b>Telefone: </b>
        <input type="number" required="required" name="telefone" > 
        <br>
        <br>
  
        <button type="submit"  class="btn btn-primary btn-lg">Cadastrar</button>
       </form>
            </center>
</div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>

      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php
// define as variáveis de mensagens de erro e as variáveis de entrada
$nomeErr = $susErr = $cepErr = $ruaErr = $casaErr = $telefoneErr ="";
$nome = $sus = $cep = $rua = $casa = $telefone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
	$nomeErr = "Nome é obrigatório";
  } else {
	$nome = test_input($_POST["nome"]);
  }

  if (empty($_POST["sus"])) {
	$susErr = "sus é obrigatório";
  } else {
	$sus = test_input($_POST["sus"]);
  }

  if (empty($_POST["cep"])) {
	$cep= "cep é obrigatorio";
  } else {
	$cep = test_input($_POST["cep"]);
  }

  if (empty($_POST["rua"])) {
	$rua = "rua é obrigatorio";
  } else {
	$rua = test_input($_POST["rua"]);
  }

  if (empty($_POST["casa"])) {
	$casaErr = "casa é obrigatório";
  } else {
	$casa = test_input($_POST["casa"]);
  }
}
 if (empty($_POST["telefone"])) {
	$telefoneErr = "telefone é obrigatório";
  } else {
	$telefone = test_input($_POST["telefone"]);
  }

?>
