<?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if ((strcmp($login, "carmela") == 0) && (strcmp($senha, "123") == 0)){
        header('Location: ../formSenha.html');
    }else{
        $query = "select login, senha from usuario where login = '{$login}' and senha = '{$senha}'"; 
        $conexao = mysqli_connect('localhost', 'root', 'carmela', 'carmelaon');
        $num = mysqli_query($conexao, $query);
        $rowcount = mysqli_num_rows($num);
        if($rowcount > 0){
            header('Location: ../painelAdm.html');
        }else{
            header('Location: ../formRetornoSenha.html');
        }
        mysqli_close($conexao);
    }
?>