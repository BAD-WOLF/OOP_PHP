<?php
namespace index1;

require_once "simples/Visitante.php";
require_once "diff/Aluno.php";
require_once "polymorphism/bolsista.php";
require_once "polymorphism/mamifero/cachorro.php";
require_once "polymorphism/reptile/Largarto.php";

use Aluno\Aluno;
use Bolsista\Bolsista;
use Mamifero\Cachorro\Cachorro;
use Reptile\Largarto\Largarto;
use Visitante\Visitante;

/**
 * Class 
 * @author yourname
 */

/*
$a = new Aluno("matheu", 18, "M");
$a->setIdade(19);
print "minha idade é: ".$a->getIdade()."\n";
$a->setNome("jubleu");
print "e eu sou o: ".$a->getNome()."\n";
$a->fazerAniv();
print "fiz aniv agora tenho: ".$a->getIdade()."y\n";
$a->setCurso("PHP");
print "estou cursando: ".$a->getCurso()."\n";
print $a->PagarMensalidade()."\n";
print_r($a);
// .......................................
$b = new Bolsista("jhessy", 15, "F");
$b->setCurso("JS");
print_r($b);
print $a->getCurso()."\n";
print $b->PagarMensalidade();
print "sou uma bolsista e meu nome é: ".$b->getNome()."\n";
print $b->RenovarBolsa();

// $obj = new index();
 */

$m = new Cachorro("mayllon", 30, 13, 4);
print_r($m->alimentar());
$r = new Largarto("zezinho", 2, 2, 4);
print_r($r->alimentar());

?>
