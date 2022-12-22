<?php
# ContaUniversitaria.php

require "ContaUinversitaria.class.php";

$conta = new ContaUniversitaria('Edson', '1111111', '2222222', 3000, "Anhanguera");


echo "Conta Universitária da ". $conta->getFaculdade() . "<br>";
echo "Saldo na conta: " . $conta->getSaldo() . "<br>";
echo "Retirada de 2950<br>";
echo $conta->retirada(2950);
echo "Saldo na conta: " . $conta->getSaldo();
