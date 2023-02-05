<?php
class Pessoa{
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __toString(){
        return "Tentei imprimir um objeto";
    }

    public function __invoke(){
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Júlio";
$pessoa->idade = 50;
$pessoa->sexo = "Masculino";

echo $pessoa();