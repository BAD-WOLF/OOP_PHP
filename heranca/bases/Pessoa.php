<?php
namespace Pessoa;

abstract class Pessoa{
          
    protected string $nome;
    protected int    $idade;
    protected string $sexo;

    public function __construct(string $nome, int $idade, string $sexo) {
        $this->nome  = $nome;
        $this->idade = $idade;
        $this->sexo  = $sexo;
    }

    /*
    public function __call($name, $arguments): string|int|null {
        $prefix = substr($name, 0, 3);
        $var    = lcfirst(substr($name, 3));
        if ($prefix == "get") {
            return $this->$var;
        }elseif ($prefix == "set") {
            $this->$var = $arguments;
        }
     */

    public function fazerAniv(){
        $this->idade = ++$this->idade;
    }
     
     /**
      * Get nome.
      *
      * @return nome.
      */
     public function getNome()
     {
         return $this->nome;
     }
     
     /**
      * Set nome.
      *
      * @param nome the value to set.
      */
     public function setNome($nome)
     {
         $this->nome = $nome;
     }
    
    /**
     * Get idade.
     *
     * @return idade.
     */
    public function getIdade()
    {
        return $this->idade;
    }
    
    /**
     * Set idade.
     *
     * @param idade the value to set.
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
     
     /**
      * Get sexo.
      *
      * @return sexo.
      */
     public function getSexo()
     {
         return $this->sexo;
     }
     
     /**
      * Set sexo.
      *
      * @param sexo the value to set.
      */
     public function setSexo($sexo)
     {
         $this->sexo = $sexo;
     }
}

?>
