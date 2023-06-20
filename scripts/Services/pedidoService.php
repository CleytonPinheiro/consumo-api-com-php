<?php

require_once './classes/requests-curl.php';

class pedidoService {

    public static function criarPedido($dadosPedido) {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "/v3/products",
            CURLOPT_POST => 1,
            CURLOPT_TIMEOUT => 30,           
            CURLOPT_HTTPHEADER => [
                "authorization:" . `config['token']`,
                "cache-control: no-cache",
                "content-type: application/json"],
            CURLOPT_POSTFIELDS => ['sku' => $dadosPedido['sku']]
        ]);

        $response = curl_exec($curl);
        $erro = curl_errno($curl);

        $dados = json_decode($response, true);

        curl_close($curl);

        var_dump($dados);

        if ($erro) {
            echo "cURL Error #:" . $erro;
        } else {
            echo $response;
        }
    }

    public static function teste($dadosPedido) {

        $data = [$dadosPedido['descricao'], 
                $dadosPedido['sku'], 
                $dadosPedido['valor'],
                $dadosPedido['valorPromocional'],
                $dadosPedido['custo'],
                $dadosPedido['peso'],
                $dadosPedido['dimensoes'],
                $dadosPedido['marca']       
            ];
       
        // $dadosToString = json_decode($dadosPedido, false);

        // try {
        //     json_decode("$dadosPedido", false, 512, JSON_THROW_ON_ERROR); 
        // }
        // catch (\JsonException $exception) {
        //     echo $exception->getMessage(); // echoes "Syntax error" 
        // }
       
        $response = RequestsCurl::curl_post('https://www.replicade.com.br/api/v3/products', $data);

        var_dump($response);
    }
}