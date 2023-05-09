<?php
namespace Mamifero\Cachorro;

require_once "bases/animal.php";

use Animal\Animal;

/**
 * Class Mamifero
 * @author yourname
 */
class Cachorro extends Animal
{
    private string $corPelo;

    public function locomover(): string
    {
       return "o mamifero esta correndo";
    }

    public function alimentar(): string
    {
        return "o mamifero foi alimentado";
    }

    public function emitirSom(): string
    {
        return "au au";
    }
    
    /**
     * Gets the value of corPelo
     *
     * @return string
     */
    public function getCorPelo(): string
    {
        return $this->corPelo;
    }

    /**
     * Sets the value of corPelo
     *
     * @param string $corPelo description
     *
     * @return Cachorro
     */
    public function setCorPelo(string $corPelo): Cachorro
    {
        $this->corPelo = $corPelo;
        return $this;
    }

}
