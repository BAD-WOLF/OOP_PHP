<?php
#namespace CompleteProject\Gafanhoto;
namespace CompleteProject\Gafanhoto;

require_once "Pessoa.php";

use CompleteProject\Pessoa\Pessoa;

/**
* Class Gafanhoto
* @author yourname
*/
class Gafanhoto extends Pessoa
{
    private bool $login;
    private int  $totAssistido;

    public function __construct(string $nome, int $idade, string $sexo){
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin(true);
    }

    public function viuMaisUm(): void
    {
        $this->setTotAssistido(++$this->totAssistido);
    }

    /**
     * Gets the value of login
     *
     * @return bool
     */
    public function getLogin(): bool
    {
        return $this->login;
    }

    /**
     * Sets the value of login
     *
     * @param bool $login description
     *
     * @return Gafanhoto
     */
    public function setLogin(bool $login): Gafanhoto
    {
        $this->login = $login;
        return $this;
    }

    /**
     * Gets the value of totAssistido
     *
     * @return int
     */
    public function getTotAssistido(): int
    {
        return $this->totAssistido;
    }

    /**
     * Sets the value of totAssistido
     *
     * @param int $totAssistido description
     *
     * @return Gafanhoto
     */
    public function setTotAssistido(int $totAssistido): Gafanhoto
    {
        $this->totAssistido = $totAssistido;
        return $this;
    }
}

?>
