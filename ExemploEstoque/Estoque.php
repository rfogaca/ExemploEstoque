<?php
require_once './Produto.php';

class Estoque {

    private $empresa;
    private $listaDeProdutos;
    private $listaDeVendas;

    public function inicializa($empresa, $listaDeProdutos, $listaDeVendas) {
        $this->empresa = $empresa;
        $this->listaDeProdutos = $listaDeProdutos;
        $this->listaDeVendas = $listaDeVendas;

       // var_dump($this->listaDeProdutos);
    }

    public function adicionaProduto($produto) {
        array_push($this->listaDeProdutos, $produto);
        
        //var_dump($this->listaDeProdutos);
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
