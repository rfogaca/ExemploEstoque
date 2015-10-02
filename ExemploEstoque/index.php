<?php
require_once './Estoque.php';
require_once './ItensVenda.php';
require_once './Preco.php';
require_once './Produto.php';
require_once './Venda.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $estoque = new Estoque();
        
        $empresa = "Empresa Exemplificada";
        $listaDeProdutos = array("Produto 1","Produto 2");
        $listaDeVendas = array("Venda 1","Venda 2");
        $produto = "Produto 3";
        
        $estoque->inicializa($empresa, $listaDeProdutos, $listaDeVendas);
        $estoque->adicionaProduto($produto);
        ?>
    </body>
</html>
