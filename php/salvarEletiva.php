<?php
    $serie = $_POST["cSerie"];
    $titulo = $_POST["tTitulo"];
    $professor = $_POST["tProfessor"];
    $descricao = $_POST["tDescricao"];
    $query = "insert into eletivas (serieeletivas, titulo, professor, descricao, status, ativo) values ('{$serie}', '{$titulo}', '{$professor}', '{$descricao}', 1, 1)";
    
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
    header('Location: ../formCadEletivas.html');
?> 