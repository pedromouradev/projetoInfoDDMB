<?php
    $nome = $_POST["tNome"];
    $funcao = $_POST["cFuncao"];

    if(isset($_FILES['tFoto']))
    {
       $ext = strtolower(substr($_FILES['tFoto']['name'],-4)); //Pegando extensão do arquivo
       $new_name = $nome . $ext; //Definindo um novo nome para o arquivo
       $dir = '../imgEquipe/'; //Diretório para uploads 
       move_uploaded_file($_FILES['tFoto']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    } 
    $caminhoF = $dir . $new_name;
    $caminhoFoto = substr($caminhoF, 1);
    $query = "insert into equipe (nomeprofessor, funcaoprofessor, fotoprofessor, ativo) values ('{$nome}', '{$funcao}', '{$caminhoFoto}', 1)";
    
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
    header('Location: ../formCadEquipe.html');
?>