  
<?php
    $nome = $_POST["tNome"];
    $email = $_POST["tEmail"];
    $telefone = $_POST["tTelefone"];
    $mensagem = $_POST["tMensagem"];
    $query = "insert into contato (nome, email, telefone, mensagem, ativo) values ('{$nome}', '{$email}', '{$telefone}', '{$mensagem}', 0)";
    
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
    header('Location: ../index.php');
?>