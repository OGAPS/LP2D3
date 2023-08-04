<?php
class fruta{
    //atributos da classe
    public $nome;
    public $cor;

    //metodos
    function __construct($nome, $cor){
            $this->nome = $nome;
            $this->cor = $cor;
    }


    function set_nome($nome){
        if($nome == "Gabriel"){
            $this->nome = "invalido";
        }else{
        $this->nome = $nome;
    }
}

    function set_cor($cor){
        $this->cor = $cor;
    }

    function get_nome(){
        return $this->nome;
    }

    function get_cor(){
        return $this->cor;
    }
    
}
//Criação de um objeto do tipo maça      new -> serve para criar um objeto
$maca = new Fruta("maca","vermelho");
$banana = new Fruta("banana", "amarelo");
$mamao = new Fruta("mamão", "laranja");

//Imprimir na tela o nome e a cor dos objetos

//$maca->cor = "vermelho";
//$maca->nome = "maçâ";
//$maca->set.nome("maçã");
echo "<br>".$maca->get_nome();
echo "<br>".$maca->get_cor();

//$banana->cor = "amarela";
//$banana->nome = "banana prata";
//$banana->set.nome ("banana prata");
echo "<br>".$banana->get_nome();
echo "<br>".$banana->get_cor();

?>