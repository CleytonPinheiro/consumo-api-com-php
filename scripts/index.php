<?php
require_once './classes/account.php';

$validaCampos = new Account();

$validaCampos->actionGetAccount($_POST);