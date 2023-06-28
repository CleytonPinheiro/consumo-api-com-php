<?php

require_once './services/pedidoService.php';

class Account {

    public $camposValidados = [];

    function actionGetAccount($camposValidar) {

        if(isset($camposValidar)) {

            AccountService::account($camposValidar);
        }
    }        
}