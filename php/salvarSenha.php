<?php
    $nome = $_POST["tNome"];
    $login = $_POST["tLogin"];
    $senha = $_POST["tSenha"];
    $query = "insert into usuario (nome, login, senha, ativo) values ('{$nome}', '{$login}', '{$senha}', 1)";
    
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
    header('Location: ../teladelogin.html');
?>