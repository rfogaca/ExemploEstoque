<?php

class Venda {
    private $codigo;
    private $data;
    private $hora;
    private $itensVenda;
        
    public function inicializaVenda() {
        $this->data = date('d-m-Y');
        $this->hora = date('H:i');
		$this->codigo = null;
		$this->itensVenda = null;
    }
	
	public function adicionaItem() {
        
    }
	
	public function adicionaVenda() {
        
    }
	
	public function consultaVenda() {
        
    }
    
    public function printOn() {
        
    }
    
	public function imprimeVendas() {
        
    }
	
    public function removeItem() {
        
    }
    
    public function removeItens() {
        
    }
    
    public function verificaVenda() {
        
    }
	
	public function removeVenda() {
        
    }
}
