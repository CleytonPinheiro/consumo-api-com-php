<?php

require_once './services/pedidoService.php';

class Pedido {

    public $camposValidados = [];

    function validaCampos($camposValidar) {
        // $camposObrigatorios = [$camposValidar['produto'],
        //     

        if (isset($camposValidar)) {           
            // pedidoService::criarPedido($camposValidar);

            pedidoService::teste($camposValidar);

        }
    }        
}