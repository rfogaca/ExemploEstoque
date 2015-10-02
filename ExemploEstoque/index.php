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
        
		$estoque = new Estoque();
        $estoque->inicializaEstoque();
		
	//	$produto = new itensVenda();
		//$produto->inicializaEstoque();
		
		$estoque->imprimeProdutos();
        $novoProduto = array("Codigo" => 01, "Preco" => null, "Nome" => "Pão", "Quantidade" => 100, "Unidade" => "kg");
        $estoque->adicionaProduto($novoProduto);
		$novoProduto = array("Codigo" => 02, "Preco" => null, "Nome" => "Manteiga", "Quantidade" => 200, "Unidade" => "uni");
        $estoque->adicionaProduto($novoProduto);
		$estoque->imprimeProdutos();
		$indiceProduto = $estoque->consultaProduto("Pão");
		$estoque->imprimeBuscaProduto($indiceProduto);
		$estoque->removeProduto("Manteiga");
		$estoque->imprimeProdutos();
		echo "<br>";
		
		//$produto->localizaCodigo("Pão");
        /// ÁREA PARA MANIPULAR INFORMAÇÕES
        ?>
    </body>
</html>
