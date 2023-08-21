<?php

    $id = filter_input (INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $query = "update eletivas set ativo = 0 where codeletivas = $id "; 
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    $num = mysqli_query($conexao, $query); 
    header('Location: ./retornarEletiva.php'); 
?>