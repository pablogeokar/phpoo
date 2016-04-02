<?php
if (isset($_GET['nome']) && isset($_GET['cpf']) && isset($_GET['cidade']) && isset($_GET['endereco']) )
{
    echo 'Nome do Cliente: '.$_GET['nome']. '</br>';
    echo 'CPF: '.$_GET['cpf']. '</br>';
    echo 'Cidade/UF: '.$_GET['cidade']. '</br>';
    echo 'Endereço: '.$_GET['endereco']. '</br>';
} else {
    echo 'Cliente nao encontradao';
}