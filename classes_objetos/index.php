<?php

// Nome da classe sempre com letra miúscula
Class Pessoa {

    // Atributos, são características da classe
    public $nome;
    public $idade;

    // Métodos, ou funções seriam as "ações" das pessoas
    public function Falar(){
        echo "$this->nome de idade $this->idade acabou de falar";
    }
} 

// Para instanciar uma classe podemos por exemplo definir uma variável que recebe um "new {Classe()}"
$julio = new Pessoa();
$julio->nome = "Júlio Guerra";
$julio->idade = 21;
$julio->Falar();
echo '<hr>';
echo '<pre>';
var_dump($julio);
echo '<hr>';
echo $julio->nome;
