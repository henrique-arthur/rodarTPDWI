<?php

require_once '../services/dbcon.php';
require_once '../model/usuarioModel.php';

$usuario = new usuario();

$usuario->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_EMAIL));
$usuario->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
$usuario->setSenha(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));