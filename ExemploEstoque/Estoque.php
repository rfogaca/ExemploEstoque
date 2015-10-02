<?php
require_once './Produto.php';

class Estoque extends Produto {

    private $empresa;
    private $listaDeProdutos;
    private $listaDeVendas;
    
    public function inicializaEstoque() {
        
        $empresa = "";
        $listaDeProdutos = array();
        $listaDeVendas = array();
        $this->empresa = $empresa;
        $this->listaDeProdutos = $listaDeProdutos;
        $this->listaDeVendas = $listaDeVendas;

    }

    public function adicionaProduto($produto) {
		
		array_push($this->listaDeProdutos, $produto);
		echo "<div style='color:green'> Produto Adicionado </div> <hr />";
    }

    public function adicionaVenda() {
        
    }

    public function consultaProduto($produto) {
		$indiceProduto = array_search($produto, array_column($this->listaDeProdutos, 'Nome'));
		return $indiceProduto;
    }

    public function consultaVenda() {
        
    }

    public function imprimeProdutos() {
		echo "##### Lista de Produtos ##### <br />";
		echo "<hr/>";
		
		foreach($this->listaDeProdutos as $listaProdutos){
			echo "Código: ".$listaProdutos['Codigo']."<br />";
			echo "Produto: ".$listaProdutos['Nome']."<br />";
			echo "Preço: ".$listaProdutos['Preco']."<br />";
			echo "Quantidade: ".$listaProdutos['Quantidade']."<br />";
			echo "Unidade: ".$listaProdutos['Unidade']."<br />";
			echo "<hr />";
		}
	}

    public function imprimeBuscaProduto($indiceProduto) {
	
		echo "##### Busca de Produto ##### <br />";
		echo "<hr/>";
		
		echo "Código: ".$this->listaDeProdutos["$indiceProduto"]['Codigo']."<br />";
		echo "Produto: ".$this->listaDeProdutos["$indiceProduto"]['Nome']."<br />";
		echo "Preço: ".$this->listaDeProdutos["$indiceProduto"]['Preco']."<br />";
		echo "Quantidade: ".$this->listaDeProdutos["$indiceProduto"]['Quantidade']."<br />";
		echo "Unidade: ".$this->listaDeProdutos["$indiceProduto"]['Unidade']."<br />";
		echo "<hr />";

	}

    public function imprimeVendas() {
        
    }

    public function removeProduto($produto) {
		
		$indiceProduto = Estoque::consultaProduto($produto);
		unset($this->listaDeProdutos[$indiceProduto]);
		
		echo "<div style='color:red'> Produto Removido </div> <hr />";
    }
	
    public function removeVenda() {
        
    }

}
