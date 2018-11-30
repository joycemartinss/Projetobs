<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Relatorio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-primary  bg-primary  fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#"><font color="white"><b>Início</b></font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4"> <font color="white"> Inicio </font></h1>
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
           
           
             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.cooperhealth.org/sites/default/files/2018-06/MDA-Sal-Roseanne-DrSomer-kidney-cancer-1600x600.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://www.revistamaismateria.com.br/wp-content/uploads/2018/08/ATS-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://portalpos2.vteximg.com.br/arquivos/ids/157763/saude-coletiva-com-enfase-em-saude-da-familia-grande.jpg?v=636581797145530000" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div> 
         
       
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  <</a>
</div>

</div> 
    <div class="card-body">
        <h3 class="card-title"> Consultas agendadas: </h3>
        <?php
  // incluindo a autenticacao
include "autenticacaoBD.php";

mysqli_select_db($conn, "agendamento"); //código para capturar a tabela posts

$result = mysqli_query($conn, 'SELECT `vagasV`, `reg_date` FROM `agendados` WHERE 1');
$somaTotal = 0;
// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        $somaTotal += $row['vagasV'];
        
	}
} else {
    echo "A tabela agendamento está vazia";
}
mysqli_close($conn);

echo "<b>Valor total das consultas: </B>" . $somaTotal. "<br>"; 
?>    

            </div>
        </div>
        <!-- /.card -->

          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->
    <!-- Footer -->
   <footer class="py-5 bg-primary ">
      <div class="container">
        <p class="m-0 text-center text-white">UBS'S-CG 2018</p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
