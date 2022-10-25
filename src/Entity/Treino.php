<?php

namespace Treinos\Entity;

use DateTime;

/**
 * @Entity
 * @Table(name="treinos")
 */
class Treino
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $descricao;
    /**
     * @Column(type="string")
     */
    private $local;
    /**
     * @Column(type="datetime")
     */
    private $dataHora;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getLocal(): string
    {
        return $this->local;
    }

    public function setLocal(string $local): void
    {
        $this->local = $local;
    }

    public function getDataHora(): DateTime
    {
        return $this->dataHora;
    }

    /**
     * Set the value of dataHora
     */
    public function setDataHora(DateTime $dataHora): void
    {
        $this->dataHora = $dataHora;
    }
}
