<?php

require_once './classes/requests-curl.php';

class pedidoService {

    public static function criarPedido($dadosPedido) {
       
        // $response = RequestsCurl::curl_post('https://www.replicade.com.br/api/v3/products', ['product' => $dadosPedido]);

        $response = RequestsCurl::curl_post2(['product' => $dadosPedido]);

        // var_dump(['product' => $dadosPedido]);

        var_dump($response);

        
    }
}