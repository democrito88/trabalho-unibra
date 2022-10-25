<?php

namespace Treinos\Controller;

use RuntimeException;
use Treinos\Entity\Usuario;
use Treinos\Infra\EntityManagerCreator;

class AutenticacaoController
{
    private $repositorioDeUsuarios;
    private $gerente;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->gerente = $entityManager;
        $this->repositorioDeUsuarios = $entityManager->getRepository(Usuario::class);
    }

    public function formularioLogin()
    {
        require_once __DIR__."/../../view/auth/login.php";
    }
    
    public function autenticar()
    {
        $senha = md5(htmlspecialchars(filter_input(INPUT_POST, 'senha')));
        $usuario = $this->repositorioDeUsuarios->findBy(
            [
                'nome' => htmlspecialchars(filter_input(INPUT_POST, 'nome')),
                'senha' => $senha
            ]);
        
        if(is_null($usuario)){
            header('Location:/login');
        }else{
            header('Location:/principal');
        }
        
    }

    public function formUsuario()
    {
        require __DIR__.'/../../view/auth/registro.php';
    }

    public function registrar()
    {
        $usuario = new Usuario();
        
        $senha = md5(htmlspecialchars(filter_input(INPUT_POST, 'senha')));
        $usuario->setNome(htmlspecialchars(filter_input(INPUT_POST, 'nome')));
        $usuario->setLogin(htmlspecialchars(filter_input(INPUT_POST, 'login')));
        $usuario->setEmail(htmlspecialchars(filter_input(INPUT_POST, 'email')));
        $usuario->setSenha($senha);

        $this->gerente->persist($usuario);
        $this->gerente->flush();

        require __DIR__.'/../../view/principal/principal.php';
    }
}