<?php
#Ave.class.php 
require_once "Animal.class.php";

class Ave extends Animal
{
    public function __construct($Nome, $Idade, $Profissao, $Habilidade, $Mentor){
        parent::__construct($Nome, $Idade, $Profissao, $Habilidade, $Mentor);
    }
    public function locomever(){
        return parent::locomover(). " e no castelo";
    }
}