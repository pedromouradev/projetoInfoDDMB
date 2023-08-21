<?php

    $id = filter_input (INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $query = "delete from usuario where codigo = $id "; 
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    $num = mysqli_query($conexao, $query); 
    header('Location: ./retornaUsuario.php'); 
?>