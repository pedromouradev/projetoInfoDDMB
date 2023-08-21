<?php
    $equipe = $_POST["cEquipe"];
    $disciplina = $_POST["tDisciplina"];
    $query = "insert into grade (modulo, disciplina, ativo) values ('{$equipe}', '{$disciplina}', 1)";
    
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
    header('Location: ../formGrade.html');
?>