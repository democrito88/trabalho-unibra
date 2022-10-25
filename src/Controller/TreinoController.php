<?php

namespace Treinos\Controller;

use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Treinos\Entity\Treino;
use Treinos\Infra\EntityManagerCreator;

class TreinoController implements InterfaceController
{
    private EntityRepository $repositorioDeTreinos;
    private EntityManager $gerente;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->gerente = $entityManager;
        $this->repositorioDeTreinos = $entityManager->getRepository(Treino::class);
    }

    public function listar(): void
    {
        $treinos = $this->repositorioDeTreinos->findAll();
        require __DIR__.'/../../view/principal/principal.php';
    }

    public function criar(): void
    {
        require __DIR__.'/../../view/treino/criar.php';
    }

    public function salvar(): void
    {
        $descricao = htmlspecialchars(filter_input(INPUT_POST, 'descricao'));
        $local = htmlspecialchars(filter_input(INPUT_POST, 'local'));
        $dataHora = htmlspecialchars(filter_input(INPUT_POST, 'dataHora'));

        $treino = new Treino();
        $treino->setDescricao($descricao);
        $treino->setLocal($local);
        $treino->setDataHora(new DateTime($dataHora));

        $this->gerente->persist($treino);
        $this->gerente->flush();

        $treinos = $this->repositorioDeTreinos->findAll();
        require_once __DIR__.'/../../view/principal/principal.php';
    }

    public function editar(): void
    {
        require __DIR__.'/../../view/treino/editar.php';
    }

    public function atualizar(): void
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $descricao = htmlspecialchars(filter_input(INPUT_POST, 'descricao'));
        $local = htmlspecialchars(filter_input(INPUT_POST, 'local'));
        $dataHora = htmlspecialchars(filter_input(INPUT_POST, 'dataHora'));

        $treino = $this->repositorioDeTreinos->find($id);
        $treino->setDescricao($descricao);
        $treino->setLocal($local);
        $treino->setDataHora(new DateTime($dataHora));

        $this->gerente->flush();
    }

    public function remover(): void
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if(is_null($id) || !$id){
            require __DIR__.'/../../view/treino/listar.php';
        }

        $this->gerente->getReference(Treino::class, $id)->remove();
        require __DIR__.'/../../view/treino/listar.php';
    }
}