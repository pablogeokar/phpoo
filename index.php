<?php

$relacaoClientes = array(
    ['nome'=> "Pablo George", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"],
    ['nome'=> "Maria da Silva", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"],
    ['nome'=> "Jose da Silva", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"],
    ['nome'=> "Mario da Silva", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"],
    ['nome'=> "Weslley", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"],
    ['nome'=> "Claudia", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"],
    ['nome'=> "Joao", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"],
    ['nome'=> "Jose", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"],
    ['nome'=> "jesus", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"],
    ['nome'=> "Tonhao", 'cpf'=>"123456789101", 'cidade'=>"Feira de Santana/BA", 'endereco'=>"Endereco A"]
);

foreach ($relacaoClientes as $cliente){
    $nome = $cliente['nome'];
    $cpf = $cliente['cpf'];
    $cidade = $cliente['cidade'];
    $endereco = $cliente['endereco'];
    echo "<a href='cliente-info.php?nome=$nome&cpf=$cpf&cidade=$cidade&endereco=$endereco'>$nome</a></br>";
}