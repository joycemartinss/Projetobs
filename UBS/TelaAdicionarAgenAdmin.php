<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
<head>
    <title>Adicionar</title>
    <style type="text/css">
        input{
            display: block;
            margin-bottom: 1em;
            padding: 5px
        }
    </style>
</head>
    <body>
        <?php 
            //Recebe os dados a serem editados
            $data = filter_input(INPUT_POST, 'data');
            $servicos = filter_input(INPUT_POST, 'servicos');
            $turno = filter_input(INPUT_POST, 'turno');
            $vagas = filter_input(INPUT_POST, 'vagas');
            $id = filter_input(INPUT_POST, 'id');
           
        ?>
    <center> 
        <h2>Alteração de dados</h2>
        <form action="telaSalvar3.php" method="post">
            
            <!-- Jogamos os valores a serem editados dentro dos inputs no campo value -->
            <input name='id' type='hidden' value="">
            Data:<input type="date" name="data" value="">
           Serviço <input type="text" name="servicos" value="">
           Turno: <input type="text" name="turno" value="">
           Vagas <input type="number" name="vagas" value="">
            <input type="submit" value="Salvar">
        </form>
    </center>
    </body>
</html>
<footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted"></span>
      </div>
    </footer>
</html>
