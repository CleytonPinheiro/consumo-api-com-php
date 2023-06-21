<?php

class RequestsCurl {
   public static function curl_post($url, array $post = NULL, array $options = array()) 
    {
        $jsonPost =  json_encode($post);

        $defaults = array( 
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",                   
            CURLOPT_HTTPHEADER => [
                "authorization: Basic aXdPMzVLZ09EZnRvOHY3M1I6",
                "content-type: application/json"],
            CURLOPT_POSTFIELDS => $jsonPost
        );

        $ch = curl_init();
        curl_setopt_array($ch, ($defaults + $options));

        $response = curl_exec($ch);

        $err = curl_error($ch);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }

        curl_close($ch);
        
        // return $result; 
    }

    public static function curl_post2(array $post) {
        $curl = curl_init();

        $jsonPost =  json_encode($post);

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://www.replicade.com.br/api/v3/products",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>  json_encode($post),
        CURLOPT_HTTPHEADER => [
            "Authorization: Basic aXdPMzVLZ09EZnRvOHY3M1I6",
            "Content-Type: application/json",
            'accept: application/json',
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $jsonPost;
        }
    }
}