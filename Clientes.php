<?php

class Clientes
{
    private $codigo;
    private $nome;
    private $cpf;
    private $cidade;
    private $endereco;

    public function __construct($codigo, $nome,$cpf, $cidade, $endereco)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cidade = $cidade;
        $this->endereco = $endereco;
    }

    public function exibeCliente(){
        echo "Nome do cliente: ".$this->nome ."</br>";
        echo 'CPF: '.$this->cpf. '</br>';
        echo 'Cidade/UF: '.$this->cidade. '</br>';
        echo 'Endereco: '.$this->endereco. '</br>';
    }
}