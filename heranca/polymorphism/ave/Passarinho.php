<?php
#namespace Ave\Passarinho;
namespace Ave\Passarinho;

use Animal\Animal;

/**
* Class Passarinho
* @author yourname
*/
class Passarinho extends Animal 
{
    private string $corPena;

    public function locomover(): string
    {
        return __CLASS__." esta voando";
    }

    public function alimentar(): string
    {
        return __CLASS__." esta comendo rato";
    }

    public function emitirSom(): string
    {
        return __CLASS__." esta cantando bentivi";
    }

    public function fazerNinho(): string
    {
        return __CLASS__." fez um ninhos";
    }

    /**
     * Gets the value of corPena
     *
     * @return string
     */
    public function getCorPena(): string
    {
        return $this->corPena;
    }

    /**
     * Sets the value of corPena
     *
     * @param string $corPena description
     *
     * @return Passarinho
     */
    public function setCorPena(string $corPena)
    {
        $this->corPena = $corPena;
        return $this;
    }
}

?>
