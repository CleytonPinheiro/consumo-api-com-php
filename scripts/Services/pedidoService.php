<?php

require_once './classes/requests-curl.php';


class pedidoService {
    
    public static function criarPedido($dadosPedido) {

        $response = RequestsCurl::curl_post(['product' => $dadosPedido]);

        $responseJson = json_decode($response);
  
        if(isset($responseJson))
        {
            session_start();            
            session_destroy();
            $_SESSION['data'] = $responseJson->message;
            $_SESSION['modalShow'] = false;

            // header("Location: ".$_SERVER['HTTP_REFERER']."");

            header("Location: ./../../../pages/modal.php");
            
            // echo($responseJson->message);
        } else {
            echo 'erro ' . ($_SESSION['data']);
        }      

        // header("Location: ../pages/modal.php?code=$responseJson->code&message=$responseJson->message");
        // var_dump(headers_list());
    }
}