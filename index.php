<?php

    require_once "Clientes.php";


//Declaração do Array proposto com 10 clientes
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

?>

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
        <?php            
            $cod = 0;


            foreach ($relacaoClientes as $cliente){


                $objClientes[$cod] = new Clientes($cod, $cliente['nome'],$cliente['cpf'],$cliente['cidade'], $cliente['endereco'] );


                $nome = $cliente['nome'];

                //echo "<a href='cliente-info.php?cod=$cod' data-toggle=\"modal\" data-target=\"#myModal\"/>$nome</a></br>";
                //echo "<a href='#' data-toggle=\"modal\" data-target=\"#myModal\"/>$nome</a></br>";
                echo "<a href='#' data-toggle=\"modal\" data-target=\"#myModal$cod\">$nome</a></br>";


         ?>
                <!-- Modal -->
                <div class="modal fade" id="<?php echo 'myModal'.$cod ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Detalhes do Cliente</h4>
                            </div>
                            <div class="modal-body">
                                <?php $objClientes[$cod]->exibeCliente(); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>

           <?php $cod++; }; ?>

    </div>





    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

