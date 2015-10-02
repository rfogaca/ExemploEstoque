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
        $estoque->inicializaEstoque();

        $produto = array("Codigo" => 01, "Preco" => null, "Nome" => "Produto 3", "Quantidade" => 100, "Unidade" => "kg");
        $estoque->adicionaProduto($produto);
        
        ?>
    </body>
</html>
