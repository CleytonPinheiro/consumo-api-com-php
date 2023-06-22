<?php

require_once './services/pedidoService.php';

class Pedido {

    public $camposValidados = [];

    function validaCampos($camposValidar) {

        if(isset($camposValidar)) {

            pedidoService::criarPedido($camposValidar);
        }
    }        
}