<?php
#namespace Fish\Peixe;
namespace Fish\Peixe;

use Animal\Animal;

/**
* Class Peixe
* @author matheu
*/
class Peixe extends Animal
{
    private string $corEscama;

    public function locomover(): string
    {
        return __CLASS__." esta nadando";
    }

    public function alimentar(): string
    {
        return __CLASS__." esta esat comendo algas marunhas";
    }

    public function emitirSom(): string
    {
        return __CLASS__." esta emitindo som";
    }

    public function soultarBolha(): string
    {
        return __CLASS__." esta soltando bolhas";
    }

    /**
     * Gets the value of corEscama
     *
     * @return string
     */
    public function getCorEscamas(): string
    {
        return $this->corEscama;
    }

    /**
     * Sets the value of corEscama
     *
     * @param string $corEscamas description
     *
     * @return 
     */
    public function setCorEscamas(string $corEscama)
    {
        $this->corEscama = $corEscama;
        return $this;
    }
}

?>
