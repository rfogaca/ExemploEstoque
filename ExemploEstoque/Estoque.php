<?php
require_once './Produto.php';

class Estoque extends Produto {

    private $empresa;
    private $listaDeProdutos;
    private $listaDeVendas;
    
    public function inicializaEstoque() {
        
        $empresa = "Empresa Exemplificada";
        $listaDeProdutos = array();
        $listaDeVendas = array();
        $this->empresa = $empresa;
        $this->listaDeProdutos = $listaDeProdutos;
        $this->listaDeVendas = $listaDeVendas;

       // var_dump($this->listaDeProdutos);
    }

    public function adicionaProduto($produto) {
        $novoProduto = array_push($this->listaDeProdutos, $produto);
        
                
        $InicializaProduto = new Produto();
        $InicializaProduto->inicializaProduto($novoProduto);
        var_dump($this->listaDeProdutos);
    }

    public function adicionaVenda() {
        
    }

    public function consultaProduto() {
        
    }

    public function consultaVenda() {
        
    }

    public function imprimeProdutos() {
        
    }

    public function imprimeVendas() {
        
    }

    public function removeProduto() {
        
    }

    public function removeVenda() {
        
    }

}
