<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
<head>
    <title>Editar</title>
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
        <form action="telaSalvar2.php" method="post">
            
            <!-- Jogamos os valores a serem editados dentro dos inputs no campo value -->
            <input name='id' type='hidden' value="<?php echo $id; ?>">
            Data:<input type="date" name="data" value="<?php echo $data; ?>">
           Serviço <input type="text" name="servicos" value="<?php echo $servicos; ?>">
           Turno: <input type="text" name="turno" value="<?php echo $turno; ?>">
           Vagas <input type="number" name="vagas" value="<?php echo $vagas; ?>">
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
