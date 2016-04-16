<?php


class Cliente
{
    private $relacaoClientes;

    public function __construct($arrayClientes)
    {
        $this->relacaoClientes = $arrayClientes;
    }

    public function ordemAlfabetica(){

        //Ordena o Array
        asort($this->relacaoClientes);

        $cod = 0;
        foreach($this->relacaoClientes as $chave) {
            $nome = $chave['nome'];
            echo "<a href='#' data-toggle='modal' data-target='#myModal$cod'>$nome</a><br>\n";
            $cod++;
        }
    }

    public function criaModal(){
        /*
         *
         * <!-- Modal -->
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
         */
        $cod = 0;
        foreach($this->relacaoClientes as $chave) {
            echo "<!-- Modal -->\n";
            echo "<div class=\"modal fade\" id=\"myModal$cod\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">\n";
            echo "<div class=\"modal-dialog\" role=\"document\">\n";
            echo "<div class=\"modal-content\">\n";
            echo "<div class=\"modal-header\">\n";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>\n";
            echo "<h4 class=\"modal-title\" id=\"myModalLabel\">Detalhes do Cliente</h4>\n";
            echo "<\div>\n";
            echo "<div class=\"modal-body\">\n";
            echo "//AQUI VEM A MENSAGEM\n";
            echo "<\div>\n";
            echo "<div class=\"modal-footer\">\n";
            echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>\n";
            echo "<\div>\n";
            echo "<\div>\n";
            echo "<\div>\n";
            echo "<\div>\n";
            $cod++;
        }

    }
}

<!-- Modal -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Detalhes do Cliente</h4>
<\div>
<div class="modal-body">
//AQUI VEM A MENSAGEM
<\div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
<\div>
<\div>
<\div>
<\div>