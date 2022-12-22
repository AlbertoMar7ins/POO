<?php

abstract class Conta
{
    private $nomecli;
    private $cpfcli;
    private $rgcli;
    
    public function __construct($nome, $cpf, $rg){
        $this->nomecli =$nome;
        $this->cpfcli =$cpf;
        $this->rgcli =$rg;
    }
}