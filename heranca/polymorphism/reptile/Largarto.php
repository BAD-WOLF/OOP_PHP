#!/usr/bin/env php
<?php
namespace Reptile\Largarto;

use Animal\Animal;

/**
 * Class Largarto
 * @author matheu
*/
class Largarto extends Animal
{
    private string $corEscama;

    public function locomover(): string
    {
        return __CLASS__." esta se rastejando";
    }

    public function alimentar(): string
    {
        return __class__." esta se alimentando de vejetai";
    }

    public function emitirSom(): string
    {
        return __class__." esta emitindo som";
    }

    /**
     * Gets the value of corEscama
     *
     * @return string
     */
    public function getCorEscama(): string
    {
        return $this->corEscama;
    }

    /**
     * Sets the value of corEscama
     *
     * @param string $corEscama description
     *
     * @return Largarto 
     */
    public function setCorEscama(string $corEscama)
    {
        $this->corEscama = $corEscama;
        return $this;
    }
}

?>
