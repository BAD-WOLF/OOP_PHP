<?php
class lutadores{
    private static string $nome;
    private static string $nacionalidade;
    private static int    $idade;
    private static float  $altura;
    private static float  $peso;
    private static string $categoria;
    private static int    $vitorias;
    private static int    $derrotas;
    private static int    $empates;

    public static function construtor(){
        // ...
    }
    
    public static function __callStatic($method, $arguments)
    {
        $prefix = substr($method, 0, 3);
        $var = lcfirst(substr($method, 3));

        if($prefix === "get"){
            return self::$$var; 
        }elseif($prefix === "set"){
            self::$$var = $arguments[0];
        }else{
            return "non-existent function";
        }
    }

    private static function apresentar(): array
    {   
        return [
            "nome" => self::$nome,
            "peso" => self::$peso,
            "idade" => self::$idade,
            "altura" => self::$altura,
            "empates" => self::$empates,
            "derrotas" => self::$derrotas,
            "vitorias" => self::$vitorias,
            "categoria" => self::$categoria,
            "nacionalidade" => self::$nacionalidade
        ];
    }

    public static function status(){
        // ...
    }

    public static function ganharLuta(){
        // ...
    }

    public static function perderLuta(){
        // ...
    }

    public static function empatarLuta(){
        // ...
    }
}

$obj = new  lutadores();

lutadores::setNome("matheu");
print_r(lutadores::getNome());
?>
