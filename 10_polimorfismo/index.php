<?php
class Animal{
    public function andar(){
        echo "O animal andou";
    }

    public function correr(){
        echo "O animal Correu";
    }
}

class Cavalo extends Animal{
    public function andar(){
        $this->correr();
    }
}

$animal = new Cavalo();
$animal->andar();