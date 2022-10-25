<?php

use Treinos\Controller\AutenticacaoController;

$auth = new AutenticacaoController();

return [
    '/' => require '../view/principal/principal.php',
    '/login' => $auth->formularioLogin(),
    '/autenticar'=> $auth->autenticar(),
    '/formulario-usuario' => $auth->formUsuario(), 
    '/salvar-usuario' => $auth->registrar()
];