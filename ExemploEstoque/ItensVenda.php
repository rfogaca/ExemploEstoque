<?php
require_once './Estoque.php';

class ItensVenda extends Estoque {

    private $data;
    private $item;
    private $quantidade;
    private $venda;

    public function inicializa() {
        $this->data = null;
		$this->item = null;
		$this->quantidade = null;
		$this->venda = null;
    }

    public function alocaVenda() {
        
    }

    public function devolveProduto() {
        
    }

    public function localizaCodigo() {

    }

    public function printOn() {
        
    }

    public function removeVenda() {
        
    }

}
