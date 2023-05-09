<?php

namespace Animal;

/**
 * Class Animal
 * @author yourname
 */
abstract class Animal
{
    private string $nome;
    private int $peso;
    private int $idade;
    private int $membros;

    public function __construct($nome, $peso, $idade, $membros)
    {
        $this->nome    = $nome;
        $this->peso    = $peso;
        $this->idade   = $idade;
        $this->membros = $membros;
    }

    public abstract function locomover(): string;

    public abstract function alimentar(): string;

    public abstract function emitirSom(): string;
    /**
     * Gets the value of nome
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Sets the value of nome
     *
     * @param string $nome description
     *
     * @return animal
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
        return $this;
    }
    /**
     * Gets the value of peso
     *
     * @return int
     */
    public function getPeso(): int
    {
        return $this->peso;
    }

    /**
     * Sets the value of peso
     *
     * @param int $peso description
     *
     * @return animal
     */
    public function setPeso(int $peso)
    {
        $this->peso = $peso;
        return $this;
    }

    /**
     * Gets the value of idade
     *
     * @return int
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Sets the value of idade
     *
     * @param int $idade description
     *
     * @return animal
     */
    public function setIdade(int $idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * Gets the value of membros
     *
     * @return int
     */
    public function getMembros(): int
    {
        return $this->membros;
    }

    /**
     * Sets the value of membros
     *
     * @param int $membros description
     *
     * @return animal
     */
    public function setMembros(int $membros)
    {
        $this->membros = $membros;
        return $this;
    }
}

?>
