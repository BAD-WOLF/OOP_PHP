<?php

namespace Prof;

use Pessoa\Pessoa;

/**
 * Class Prof
 * @author yourname
 */
class Prof extends Pessoa
{
    private int $salario       = 500;
    private string $especialidade;

    public function Aumento(int $almento){
        $this->salario = $this->salario + $almento;
    }
    
    /**
     * Get salario.
     *
     * @return salario.
     */
    public function getSalario()
    {
        return $this->salario;
    }
    
    /**
     * Set salario.
     *
     * @param salario the value to set.
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    
    /**
     * Get especialidade.
     *
     * @return especialidade.
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    
    /**
     * Set especialidade.
     *
     * @param especialidade the value to set.
     */
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }
}
