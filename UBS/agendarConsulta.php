   <?php 
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
                mysqli_select_db($conn, "agendamento"); //código para capturar a tabela posts

                $result = mysqli_query($conn, 'SELECT `id`, `data`, `servicos`, `turno`, `vagas`, `reg_date` FROM `agendamento` WHERE 1');

                if (mysqli_affected_rows($conn)) {
                    //echo 'Exibindo ' . mysqli_affected_rows($con) . ' registros localizados <br /><br />';
                    while ($item = mysqli_fetch_assoc($result)) {

                        if($servicos == $item['servicos']){//
                            echo $item['vagas'];//
                            if($item['vagas'] >= $vagas ){//
                                $total = $vagas * $item['vagas'];//

                                mysqli_query($conn, $sql);//
                                $id = $item['id'];//
                                $novaVagas = $item['vagas'] - $vagas;//
                                $sql1 = "UPDATE `agendamento` SET `vagas`=$novaVagas WHERE $id";//
                                mysqli_query($conn, $sql1);//    
                            }else{
                                echo "Não é possivel!!!!!";
                            }  
                        }
                    }
                }
                
                echo "<button>Agendar</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }
              ?>