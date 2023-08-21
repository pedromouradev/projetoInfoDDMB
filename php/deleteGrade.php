<?php

    $id = filter_input (INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $query = "update grade set ativo = 0 where codgrade = $id "; 
    $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
    $num = mysqli_query($conexao, $query); 
    header('Location: ./retornaGrade.php'); 
?>