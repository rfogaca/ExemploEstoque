<?php

class Venda {
    private $codigo;
    private $data;
    private $hora;
    private $itensVenda;
        
    public function inicializa() {
        $this->data = date('d-m-Y');
        $this->hora = date('H:i');
		$this->codigo = null;
		$this->itensVenda = null;
    }
    
    public function adicionaItem() {
        
    }
    
    public function printOn() {
        
    }
    
    public function removeItem() {
        
    }
    
    public function removeItens() {
        
    }
    
    public function verificaVenda() {
        
    }
}
