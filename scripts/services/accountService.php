<?php

require_once './classes/requests-curl.php';


class accountService {
    
    public static function account($dataAccount) {

        $response = RequestsCurl::curlPost(['dataAccount' => $dataAccount]);
  
        if(isset($responseJson))
        {
           return $response;
        } else {
            echo 'erro :';
        }
    }
}