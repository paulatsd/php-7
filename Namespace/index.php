<?php

require_once("config.php");
// require_once("class/Cliente/Cadastro.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Paula Tatyene");
$cad->setEmail("paula@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();


 ?>
