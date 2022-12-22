<?php
#Rangers.class.php 
class Rangers
{
    private $Nome;
    private $Idade;
    private $Profissao;
    private $Habilidade;
    private $Mentor;

    public function __construct($Nome, $Idade, $Profissao, $Habilidade, $Mentor)
    {
        if(is_string($Nome)) {
            $this->Nome = $Nome;
        }
        if(is_numeric($Idade)) {
            $this->Idade = $Idade;
        }
        if(is_string($Profissao)) {
            $this->$Profissao = $Profissao;
        }
        if(is_string($Habilidade)) {
            $this->Habilidade = $Habilidade;
        }
        if(is_string($Mentor)) {
            $this->Mentor = $Mentor;
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
    public function getProfissao()
    {
        return $this->Profissao;
    }
    public function getHabilidade()
    {
        return $this->Habilidade;
    }
    public function getMentor()
    {
        return $this->Mentor;
    }
    public function locomover()
    {
        return "Sem Profissão";
    }
}
