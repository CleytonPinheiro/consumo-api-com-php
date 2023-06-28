<?php

class RequestsCurl {

    public static function curlPost(array $post) {
        $curl = curl_init();

        $jsonPost =  json_encode($post, JSON_NUMERIC_CHECK);
        
        curl_setopt_array($curl, [
        CURLOPT_PORT => "8000",
        CURLOPT_URL => "http://localhost:8000/api/conta",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $jsonPost,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }
    }

    public function curlGet()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_PORT => "8000",
            CURLOPT_URL => "http://localhost:8000/api/conta",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }
    }

    public function curl_put($dataAccount)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_PORT => "8000",
        CURLOPT_URL => "http://localhost:8000/api/conta/2",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $dataAccount,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }
    }
}