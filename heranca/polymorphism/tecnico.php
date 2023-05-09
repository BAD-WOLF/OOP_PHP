<?php

namespace Tecnico;

use Aluno\Aluno;

/**
 * Class Tecnico
 * @author yourname
 */
class Tecnico extends Aluno
{
    private string $email;
    private int    $telefone;

    public function fazerAniv()
    {
        return "esse aqui é diferenciado, so faz aniv quando pode";
    }

    public function Praticar(){
        return "praticando";
    }
     
     /**
      * Get email.
      *
      * @return email.
      */
     public function getEmail()
     {
         return $this->email;
     }
     
     /**
      * Set email.
      *
      * @param email the value to set.
      */
     public function setEmail($email)
     {
         $this->email = $email;
     }
    
    /**
     * Get telefone.
     *
     * @return telefone.
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
    
    /**
     * Set telefone.
     *
     * @param telefone the value to set.
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
}
