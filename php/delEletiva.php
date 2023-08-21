<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Fazer login</title>
    <meta name="viewport" content="width, initial-scale=1.0, maximum-scale=1.0">
    <link href="hhtps://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <style>
       body{
            background-image: url(../img/FundoTelaLogin.jpeg);
            background-size: 100%;
             }
    </style>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <section>
        <h3 class="text-secondary text-center espaco">Atualização:</h3>
        <?php

            $id = filter_input (INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

            echo '<p class="text-white">Quer mesmo excluir esse registro?</p>';
            echo "<a href='deleteEletiva.php?id=$id' class='bt-container bt btn btn-success'>Sim </a>";
            echo "<a href='retornarEletiva.php' class='bt-container bt btn btn-danger'>Não</a>";
        ?>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>