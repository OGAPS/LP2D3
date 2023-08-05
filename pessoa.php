<?php
class Pessoa{
    private $nome;
    private $idade;
    private $profissao;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function calcular_area(){
        return $this->nome * 
            $this->idade;
    }
    function calcular_perimetro(){
        return 2*$this->nome + 
            2*$this->idade;
    }

}
?>