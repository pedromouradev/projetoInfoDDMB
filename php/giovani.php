<?php
    ini_set('display_erros', 1);
    error_reporting(E_ALL);
    $from = "lennontaqua@hotmail.com";
    $to = "luciano.barros4@etec.sp.gov.br";
    $subject = "Giovani, Vamos Programar";
    $message = "Giovani dá muito trabalho";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mensagem Enviado Com Sucesso";
?>