<?php

namespace Aluno;

use Pessoa\Pessoa;

/**
 * Class Aluno
 * @author yourname
 */
class Aluno extends Pessoa
{
    private int    $matricula;
    private string $curso;

    public function PagarMensalidade(){
        return "pagando menssalidade de: ".self::getNome()."!!";
    }
    
    /**
     * Get matricula.
     *
     * @return matricula.
     */
    public function getMatricula()
    {
        return $this->matricula;
    }
    
    /**
     * Set matricula.
     *
     * @param matricula the value to set.
     */
    public function setMatricula(int $matricula)
    {
        $this->matricula = $matricula;
    }
     
     /**
      * Get curso.
      *
      * @return curso.
      */
     public function getCurso()
     {
         return $this->curso;
     }
     
     /**
      * Set curso.
      *
      * @param curso the value to set.
      */
     public function setCurso(string $curso)
     {
         $this->curso = $curso;
     }
}
