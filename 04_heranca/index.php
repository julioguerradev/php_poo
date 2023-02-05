<?php
Class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function andar(){
        echo 'Andou';
    }

    public function parar(){
        echo 'Parou';
    }
}

// Carro agora está herdando atributos e métodos da classe veiculo
Class Carro extends Veiculo {
    public function ligarLimpador(){
        echo 'Limpando em 3, 2, 1...';
    }
}

Class Moto extends Veiculo {
    public function darGrau(){
        echo 'Dando grau em 3,2,1...';
    }
}

echo '<pre>';

$carro = new Carro();
$carro->modelo = 'Gol';
$carro->cor    = 'Vermelho';
$carro->ano    = 2018;


$carro->andar();
echo '<br>';
$carro->ligarLimpador();
echo '<br>';
var_dump($carro);
echo '<hr>';

$moto = new Moto();
$moto->modelo = 'Bis';
$moto->cor    = 'Azul';
$moto->ano    = 2017;

$moto->parar();
echo '<br>';
$moto->darGrau();
echo '<br>';
var_dump($moto);
echo '<hr>';