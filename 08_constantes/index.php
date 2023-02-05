<?php

class Pessoa{
    const nome = "Júlio";

    public function exibirNome(){
        echo self::nome;
    }
}

class Julio extends Pessoa{
    const nome = 'Guerra';

    public function exibirNome(){
        echo self::nome;    
        echo '<br>';
        echo parent::nome;
    }
}

$pessoa = new Julio();
$pessoa->exibirNome();
