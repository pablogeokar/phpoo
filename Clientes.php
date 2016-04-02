<?php

class Clientes
{
    private $nome;
    private $cpf;
    private $cidade;
    private $endereco;

    public function __construct($nome,$cpf, $cidade, $endereco)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cidade = $cidade;
        $this->endereco = $endereco;
    }
}