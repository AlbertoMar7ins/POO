<?php
require "ContaPoupanca.class.php";

class ContaUniversitaria extends ContaPoupanca
{
    private $faculdade;

    public function __construct($nome, $cpf, $rg, $saldo, $faculdade)
    {
        parent::__construct($nome, $cpf, $rg, $saldo);
        $this->faculdade = $faculdade;
    }
    public function getFaculdade(){
    return $this->faculdade;
}
}