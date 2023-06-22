<?php

require_once './classes/requests-curl.php';

class pedidoService {

    public static function criarPedido($dadosPedido) {

        $response = RequestsCurl::curl_post(['product' => $dadosPedido]);

        $responseJson = json_decode($response);
  
        if(isset($response))
        {
            session_start();
            $_SESSION['data'] = $responseJson;
            $_SESSION['modalShow'] = true;
            header("Location: ".$_SERVER['HTTP_REFERER']."");
            // echo($responseJson->message);
        } else {
            echo 'erro ' . ($_SESSION());
        }

        // header("Location: ../pages/modal.php?code=$responseJson->code&message=$responseJson->message");
        // var_dump(headers_list());
    }
}