<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>UBS'-CG</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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
                        <a href="relatorio.php" class="list-group-item">Relatório</a>

                    </div>
                </div>
                <!-- /.
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <div class="card mt-4">
                        <div class="container mt-3">


                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ul>



                            </div> 
                            <div class="card-body">
                                <h3 class="card-title">Consultas agendadas: </h3>
                                <?php
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

                                $sql = "SELECT `id`, `nome`, `sus`, `cep`, `rua`, `numeroCasa`, `bairro`, `quantidadeMoradores`, `telefone`, `reg_date`, `email`, `senha` FROM `pacientes` WHERE 1";
                                $result = mysqli_query($conn, $sql);


// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
                                if (mysqli_num_rows($result) > 0) {
                                    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
                                    echo "<table class='table'>     ";
                                    echo "<thead class='thead-dark'>     ";
                                    echo "    <tr>                   ";
                                    echo "        <td>";
                                    echo "            ID";
                                    echo "        </td>";
                                    echo "        <td>";
                                    echo "            Nome do Paciente";
                                    echo "        </td>";
                          
                                    echo "    </tr>";
                                    echo "      </thead>";

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tbody>";
                                        echo "<tr>";
                                        echo "   <td>";
                                        echo $row['id'];
                                        echo "   </td>";
                                        echo "   <td>";
                                        echo $row['nome'];
                                        echo "   </td>";
                                   
                                        echo "</tr>";
                                        echo "</tbody>";
                                    }
                                    echo "</table>";
                                } else {
                                    echo "A tabela Registro está vazia";
                                }
                                $sql = "SELECT `id`, `data`, `servicos`, `turno`, `vagas`, `reg_date` FROM `agendamento` WHERE 1";
                                $result = mysqli_query($conn, $sql);


// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
                                if (mysqli_num_rows($result) > 0) {
                                    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
                                    echo "<table class='table '>     ";
                                    echo "    <tr>                   ";
                                   
                        
                                    echo "        <td>";
                                    echo "            <b>Serviço solicitado</b>";
                                    echo "        </td>";
                                    echo "    </tr>";

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                   
                                     
                                        echo "   <td>";
                                        echo $row['servicos'];
                                        echo "   </td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                } else {
                                    echo "A tabela Registro está vazia";
                                }



                                mysqli_close($conn)
                                ?>
                            </div>
                        </div>
                        <!--/.card -->

                    </div>
                    <!--/.card -->

                </div>
                <!--/.col-lg-9 -->

            </div>

        </div>
        <!--/.container -->

        <!--Footer -->
        <footer class = "py-5 bg-primary ">
            <div class = "container">
                <p class = "m-0 text-center text-white">UBS'S-CG 2018</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
