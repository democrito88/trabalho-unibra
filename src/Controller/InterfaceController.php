<?php

namespace Treinos\Controller;

interface InterfaceController
{
    public function __construct();
    public function listar(): void;
    public function criar():void;
    public function salvar(): void;
    public function editar(): void;
    public function atualizar(): void;
    public function remover(): void;
}