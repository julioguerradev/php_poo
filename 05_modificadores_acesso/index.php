<?php
Class Veiculo{
    private $modelo;
    public $cor;
    public $ano;

    public function andar(){
        echo 'Andou';
    }

    public function parar(){
        echo 'Parou';
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
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
$veiculo = new Veiculo();
$veiculo->setModelo('Hilux');
echo $veiculo->getModelo();
echo '<br>';
var_dump($veiculo);