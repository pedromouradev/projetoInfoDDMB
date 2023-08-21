<?php
    $nome = $_POST["tnome"];
    $tRA = $_POST["tRA"];
    $tSerie = $_POST["tSerie"];
    $tTelefone = $_POST["tTelefone"];
    $tEmail = $_POST["tEmail"];
    $tRespAluno = $_POST["tRespAluno"];
    $grau = $_POST["cGrau"];
    $tTelResponsavel = $_POST["tTelResponsavel"];
    $tEmailResp = $_POST["tEmailResp"];
    $query = "insert into aluno (nomeAluno, RA, Serie, Telefone, Email, RespAluno, grau, TelResponsavel, EmailResponsavel, ativo) values ('{$nome}', '{$tRA}', '{$tSerie}', '{$tTelefone}', '{$tEmail}', '{$tRespAluno}',  '{$grau}', '{$tTelResponsavel}', '{$tEmailResp}', 1)";
    
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
    header('Location: ../teladelogin.html');
?>