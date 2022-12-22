<?php
#Animal.class.php 
class Animal
{
    private $Nome;
    private $Idade;
    private $CorDoPelo;
    private $Peso;

    public function __construct($Nome, $Idade, $CorDoPelo, $Peso)
    {
        if(is_string($Nome)) {
            $this->Nome = $Nome;
        }
        if(is_numeric($Idade)) {
            $this->Idade = $Idade;
        }
        if(is_string($CorDoPelo)) {
            $this->$CorDoPelo = $CorDoPelo;
        }
        if(is_string($Peso)) {
            $this->Peso = $Peso;
        }
    }
    public function getNome()
    {
        return $this->Nome;
    }
    public function getIdade()
    {
        return $this->Idade;
    }
    public function getCorDoPelo()
    {
        return $this->CorDoPelo;
    }
    public function getPeso()
    {
        return $this->Peso;
    }
    public function locomover()
    {
        return "Andam";
    }
}
