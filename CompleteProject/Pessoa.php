<?php
#namespace CompleteProject\Pessoa;
namespace CompleteProject\Pessoa;


/**
* Class Pessoa
* @author yourname
*/
abstract class Pessoa
{
    protected string $nome;
    protected int    $idade;
    protected string $sexo;
    protected int    $exp;

    public function __construct(string $nome, int $idade, string $sexo){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    protected function ganharExp(){
        $this->setExp(++$this->exp);
    }

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
     * @return Pessoa
     */
    public function setNome(string $nome): Pessoa
    {
        $this->nome = $nome;
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
     * @return Pessoa  
     */
    public function setIdade(int $idade): Pessoa
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * Gets the value of sexo
     *
     * @return string
     */
    public function getSexo(): string
    {
        return $this->sexo;
    }

    /**
     * Sets the value of sexo
     *
     * @param string $sexo description
     *
     * @return Pessoa  
     */
    public function setSexo(string $sexo): Pessoa
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * Gets the value of exp
     *
     * @return int
     */
    public function getExp(): int
    {
        return $this->exp;
    }

    /**
     * Sets the value of exp
     *
     * @param int $exp description
     *
     * @return Pessoa  
     */
    public function setExp(int $exp): Pessoa
    {
        $this->exp = $exp;
        return $this;
    }
}

?>
