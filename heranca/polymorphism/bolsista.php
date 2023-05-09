<?php
namespace Bolsista;

require_once "diff/Aluno.php";

use Aluno\Aluno;

/**
 * Class Bolsista
 * @author yourname
 */
class Bolsista extends Aluno
{
    private int $bolsa;

    public function RenovarBolsa(){
        print "renovando a boulsa de: ".$this->getNome()."!!";
    }

    public function PagarMensalidade(){
        return "o aluno ".$this->getNome()." é bolsista, paga com disconto!!";
    }
    
    /**
     * Get bolsa.
     *
     * @return bolsa.
     */
    public function getBolsa()
    {
        return $this->bolsa;
    }
    
    /**
     * Set bolsa.
     *
     * @param bolsa the value to set.
     */
    public function setBolsa(int $bolsa)
    {
        $this->bolsa = $bolsa;
    }
}
