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
		/// ÁREA PARA MANIPULAR INFORMAÇÕES
        
		$produto = new Produto();
        $produto->inicializaProduto();
		
		$produto->imprimeProdutos();
		
        $novoProduto = array("Codigo" => 01, "Preco" => null, "Nome" => "Pão", "Quantidade" => 100, "Unidade" => "kg");
        $produto->adicionaProduto($novoProduto);
		
		$novoProduto = array("Codigo" => 02, "Preco" => null, "Nome" => "Manteiga", "Quantidade" => 200, "Unidade" => "uni");
        $produto->adicionaProduto($novoProduto);
		
		$produto->imprimeProdutos();
		
		$indiceProduto = $produto->consultaProduto("Pão");
		$produto->imprimeBuscaProduto($indiceProduto);
		$produto->removeProduto("Manteiga");
		
		$produto->imprimeProdutos();

        /// ÁREA PARA MANIPULAR INFORMAÇÕES
        ?>
    </body>
</html>
