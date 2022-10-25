<?php

use Treinos\Controller\AutenticacaoController;
use Treinos\Controller\TreinoController;

require '../vendor/autoload.php';

$caminho = $_SERVER['PATH_INFO'];

switch ($caminho) {
    case '/principal':
        $tC = new TreinoController();
        $tC->listar();
        break;
    case '/login':
        $aC = new AutenticacaoController();
        $aC->formularioLogin();
        break;
    case '/autenticar':
        $aC = new AutenticacaoController();
        $aC->autenticar($_POST);
        break;
    case '/formulario-usuario':
        $aC = new AutenticacaoController();
        $aC->formUsuario();
        break;
    case '/salvar-usuario':
        $aC = new AutenticacaoController();
        $aC->registrar($_POST);
        break;
    case '/criar-treino':
        $tC = new TreinoController();
        $tC->criar();
        break;
    case '/salvar-treino':
        $tC = new TreinoController();
        $tC->salvar();
        break;
    default:
        echo "<h2>404</h2><p>página não encontrada</p>";
        break;
}