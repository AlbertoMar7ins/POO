<?php
#Ave.class.php 
require_once "Animal.class.php";

class Ave extends Animal
{
    public function __construct($Nome, $Idade, $CorDoPelo, $Peso){
        parent::__construct($Nome, $Idade, $CorDoPelo, $Peso);
    }
    public function locomever(){
        return parent::locomover(). " e Voam";
    }
}