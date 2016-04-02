<?php

require_once "Clientes.php";

echo '<a href="index.php">Voltar</a></br></br>';

if (isset($_GET['cod']) && isset($_GET['nome']) && isset($_GET['cpf']) && isset($_GET['cidade']) && isset($_GET['endereco']) )
{
    $cliente = new Clientes($_GET['cod'], $_GET['nome'], $_GET['cpf'], $_GET['cidade'], $_GET['endereco']);
    $cliente->exibeCliente();

} else {
    echo 'Cliente nao encontradao';
}