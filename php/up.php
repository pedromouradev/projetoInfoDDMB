<?php

    $id = filter_input (INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $query = "update contato set ativo = 1 where codigo = $id "; 
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    $num = mysqli_query($conexao, $query); 
    header('Location: ./retornaPainel.php'); 
?>