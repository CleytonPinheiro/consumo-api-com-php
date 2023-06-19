<?php
require './classes/pedido.php';

$validaCampos = new Pedido();

$validaCampos->validaCampos($_POST);