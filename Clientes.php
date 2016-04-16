<?php


class Cliente
{
    private $relacaoClientes;
    private $informacoesCliente;

    public function __construct($arrayClientes)
    {
        $this->relacaoClientes = $arrayClientes;
    }

    public function ordemCrescente()
    {
        //Ordena o Array
        asort($this->relacaoClientes);

        //Chama a função privada exibeClientes();
        $this->exibeClientes();
    }

    public function ordemDecrescente(){
        //Ordena o Array
        rsort($this->relacaoClientes);

        //Chama a função privada exibeClientes();
        $this->exibeClientes();
    }

    private function criaModal($cod, $informacoesCliente)
    {

            echo "<!-- Modal -->\n";
            echo "<div class=\"modal fade\" id=\"myModal$cod\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">\n";
            echo "<div class=\"modal-dialog\" role=\"document\">\n";
            echo "<div class=\"modal-content\">\n";
            echo "<div class=\"modal-header\">\n";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>\n";
            echo "<h4 class=\"modal-title\" id=\"myModalLabel\">Detalhes do Cliente</h4>\n";
            echo "</div>\n";
            echo "<div class=\"modal-body\">\n";
            echo $informacoesCliente;
            echo "</div>\n";
            echo "<div class=\"modal-footer\">\n";
            echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>\n";
            echo "</div>\n";
            echo "</div>\n";
            echo "</div>\n";
            echo "</div>\n";

        }


    private function exibeClientes(){
        $cod = 0;
        foreach ($this->relacaoClientes as $chave) {
            $nome = $chave['nome'];
            echo "<a href='#' data-toggle='modal' data-target='#myModal$cod'>$nome</a><br>\n";
            $this->informacoesCliente = "Nome do cliente: $nome <br> CPF: ".$chave['cpf']."<br>Cidade/UF: " . $chave['cidade']."<br>Endereço: " . $chave['endereco'];

            //Chama a função privada criaModal
            $this->criaModal($cod, $this->informacoesCliente);

            $cod++;
        }
    }

}

