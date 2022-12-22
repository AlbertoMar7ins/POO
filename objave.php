<?php
#objave.php 
require_once "Ave.class.php";

echo "Instanciando objeto da classe mãe.<p>";

$p1 = new Animal('Cão', 2, 'preto', 20);
print 'Nome: '. $p1->getNome(). '<br>';
print 'Locomoção: '. $p1->locomover(). '<br>';
print 'Idade: '. $p1->getIdade(). '<br>';
print 'Cor: '. $p1->getCorDoPelo(). '<br>';
print 'Peso: '. $p1->getPeso(). '<br>';

echo"##################<p>";
echo "Instanciando o objeto da classe filha usando polimorfismo.<p>";

$p2 = new Ave('Pardal', 3, 'Cinza', 2);
print 'Nome: '. $p2->getNome(). '<br>';
print 'Idade: '. $p2->getIdade(). '<br>';
print 'Cor: '. $p2->getCorDoPelo(). '<br>';
print 'Peso: '. $p2->getPeso(). '<br>';
print 'Locomoção '. $p2->locomover(). '<br>';