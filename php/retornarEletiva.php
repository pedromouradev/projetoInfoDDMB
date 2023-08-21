<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Eletivas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container-fluid">

    <h2>Contatos Registrados</h2>

    <table class="table table-hover table-dark">        
        <thead>
            <tr>
                <th>Série:</th>
                <th>Título:</th>
                <th>Descrição:</th>
                <th>Professor:</th>
                <th>Situação:</th>
                <th>Exclusão:</th>
                <th>Alteração:</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "select * from eletivas where ativo = 1"; 
                $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
                $num = mysqli_query($conexao, $query);       
                $rowcount = mysqli_num_rows($num);  
                if($rowcount != 0){
                    while($linha = $num->fetch_assoc()){
                        $codigo = $linha['codeletivas'];
                        $status = $linha['status'];
                        $resp = "";
                        if($status == 1){
                            $resp = "Ativo";
                        }else{
                            $resp = "Inativo";
                        }
                        echo "<tr>";
                        echo "<td>" . $linha['serieEletivas'] . "</td>";
                        echo "<td>" . $linha['titulo'] . "</td>";
                        echo "<td>" . $linha['descricao'] . "</td>";
                        echo "<td>" . $linha['professor'] . "</td>";
                        echo "<td>" . $resp . "</td>";
                        echo "<td> <a href='delEletiva.php?id=$codigo'> Excluir </a></td>";
                        echo "<td> <a href='update.php?id=$codigo'> Alterar </a></td>";
                        echo "<tr>";
                    }
                }    
            ?>
        </tbody>
    </table>
    <a href="../painelAdm.html" class="btn btn-primary">Painel Administrativo</a>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>