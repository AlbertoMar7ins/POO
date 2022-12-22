<?php
# ContaPoupanca.class.php

require "Conta.class.php";

final class ContaPoupanca extends Conta
{
    private $saldo;

    public function __construct($nome, $cpf, $rg, $saldo)
    {
        parent::__construct($nome, $cpf, $rg);
        $this->saldo = $saldo;
    }<?php
# ContaPoupanca.class.php

require "Conta.class.php";

final class ContaPoupanca extends Conta
{
    private $saldo;

    public function __construct($nome, $cpf, $rg, $saldo)
    {
        parent::__construct($nome, $cpf, $rg);
        $this->saldo = $saldo;
    } 