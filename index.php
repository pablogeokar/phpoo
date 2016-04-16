<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PHPoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Relação de Clientes</h2>
    <a href="?ordem-crescente">
        <button type="button" class="btn btn-default">Ordem Crescente</button>
    </a>
    <a href="?ordem-decrescente">
        <button type="button" class="btn btn-default">Ordem Decrescente</button>
    </a><br><br>


    <?php

    require_once "Clientes.php";


    //Declaração do Array proposto com 10 clientes
    $relacaoClientes = array(
        ['nome' => "Pablo George", 'cpf' => "123456789101", 'cidade' => "Feira de Santana/BA", 'endereco' => "Endereco A"],
        ['nome' => "Maria da Silva", 'cpf' => "123456789101", 'cidade' => "Feira de Santana/BA", 'endereco' => "Endereco B"],
        ['nome' => "Jose da Silva", 'cpf' => "123456789101", 'cidade' => "Feira de Santana/BA", 'endereco' => "Endereco C"],
        ['nome' => "Mario da Silva", 'cpf' => "123456789101", 'cidade' => "Feira de Santana/BA", 'endereco' => "Endereco D"],
        ['nome' => "Weslley", 'cpf' => "123456789101", 'cidade' => "Feira de Santana/BA", 'endereco' => "Endereco E"],
        ['nome' => "Claudia", 'cpf' => "123456789101", 'cidade' => "São Paulo/SP", 'endereco' => "Endereco F"],
        ['nome' => "Joao", 'cpf' => "123456789101", 'cidade' => "Feira de Santana/BA", 'endereco' => "Endereco G"],
        ['nome' => "Jose", 'cpf' => "123456789101", 'cidade' => "Feira de Santana/BA", 'endereco' => "Endereco H"],
        ['nome' => "Jesus", 'cpf' => "123456789101", 'cidade' => "Feira de Santana/BA", 'endereco' => "Endereco I"],
        ['nome' => "Tonhao", 'cpf' => "123456789101", 'cidade' => "Feira de Santana/BA", 'endereco' => "Endereco J"]
    );


    $clientes = new Cliente($relacaoClientes);


    if (isset($_GET['ordem-crescente']))
    $clientes->ordemCrescente();

    if (isset($_GET['ordem-decrescente']))
        $clientes->ordemDecrescente();



    ?>

</div>


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>


