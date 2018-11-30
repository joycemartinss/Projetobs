<!DOCTYPE html>
<html lang="en">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        table{
            border: 1px solid gray;
            padding: 1em
        }
        td{
            border: 1px solid lightgray;
            font-size: 1em;
            padding: 5px
        }
        button{
            padding: 5px
        }
    </style>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UBS-CG</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#"> <font color="white"><b>Agendamento</b></font> </a>
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
              <a href="relatorio.php" class="list-group-item">Relatório</a>
    
            </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <div class="container mt-3">
            <div class="card-body">
                <h3 class="card-title"><center>Angedamento</center> </h3>
                <br>
                
            
             
         
    <?php 
        //Área de notificações

        //Se existe a variável remocao, então
        if( isset($_GET['remocao'])){
            //Se remoção tem true, os dados foram removidos
            if( $_GET['remocao'] == "true" ){
                echo "<p>Os dados foram removidos.</p>";            
            }else{
                echo "<p>Não foi possivel remover os dados.</p>";
            }
        } 
        //Se existe a variável alteração, então
        if( isset($_GET['alteracao']) ){
            //Se alteracao tem true, os dados foram alterados
            if( $_GET['alteracao'] == "true" ){
                echo "<p>Os dados foram alterados.</p>";            
            }else{
                echo "<p>Não foi possivel alterar os dados.</p>";
            }
        } 
        
    ?>
                <center><table>
        <tr>
            <td>Id</td>
            <td>Data</td>
            <td>Serviços</td>
            <td>Turno</td>
            <td>Vagas</td>
        </tr>
        <?php 
        // incluindo a autenticacao
        include "autenticacaoBD.php";
        
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
            //Carrega os dados
            $sql = "SELECT * FROM agendamento";
            $consulta = mysqli_query($conn, $sql);
            if( !$consulta ){
                echo "Erro ao realizar consulta. Tente outra vez.";
                exit;
            }
            //se tudo deu certo, exibe os dados
            while( $dados = mysqli_fetch_assoc($consulta) ){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['data']. "</td>";
                echo "<td>" .$dados['servicos']. "</td>";
                echo "<td>" .$dados['turno']. "</td>";
                echo "<td>" .$dados['vagas']. "</td>";
           
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='telaEditar.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='data' type='hidden' value='" .$dados['data']. "'>";
                echo "<input name='servicos' type='hidden' value='" .$dados['servicos']. "'>";
                echo "<input name='turno' type='hidden' value='" .$dados['turno']. "'>";
                echo "<input name='vagas' type='hidden' value='" .$dados['vagas']. "'>";
                
                echo "<button>Editar</button>";
                echo "</form>";
                echo "</td>";
                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<td>";
                echo "<form action='telaExcluir.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
               echo "<button>Remover</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }
        ?>
   
    </table>
</center>
               
                       <?php
                 echo "<td>";
                 
                echo "<form action='telaAdicionarAgenAdmin.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='data' type='hidden' value='" .$dados['data']. "'>";
                echo "<input name='servicos' type='hidden' value='" .$dados['servicos']. "'>";
                echo "<input name='turno' type='hidden' value='" .$dados['turno']. "'>";
                echo "<input name='vagas' type='hidden' value='" .$dados['vagas']. "'>";
                
                echo "<button> Adicionar </button>";
                echo "</form>";
                echo "</td>";
?>
            </div>
          </div>
          <!-- /.card -->
  
                
     
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <br>
  <br>
   <br>
  <br>
   <br>
  <br>
   <br>
  <br>
   <br>
  <br>
   <br>
  <br>
  
     
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
