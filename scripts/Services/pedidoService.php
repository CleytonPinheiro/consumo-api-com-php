<?php

class pedidoService {

    public $dadosPedido;

    public function __construct(Pedido $var = null) {
        $this->dadosPedido = $var;
    }
}