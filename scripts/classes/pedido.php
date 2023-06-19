<?php

require './app/scripts/PedidoService.php';

class Pedido {

    public $camposValidados = [];

    function validaCampos($camposValidar) {
        // $camposObrigatorios = [$camposValidar['produto'],
        //     $camposValidar['descricao'],
        //     $camposValidar['valor'],
        //     $camposValidar['valorPromocional'],
        //     $camposValidar['custo'],
        //     $camposValidar['peso'],
        //     $camposValidar['dimensoes'],
        //     $camposValidar['marca']];

        if (isset($camposValidar)) {
            $dadosRetorno = pedidoService::class;
            
        }
    }        
}