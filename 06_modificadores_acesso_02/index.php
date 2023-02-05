<?php
Class Veiculo{
    private $modelo;
    public $cor;
    public $ano;

    private function andar(){
        echo 'Andou';
    }

    public function parar(){
        echo 'Parou';
    }

    public function mostrarAcao(){
        $this->andar();
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

$veiculo = new Veiculo();
$veiculo->mostrarAcao();