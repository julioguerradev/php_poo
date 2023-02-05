<?php
abstract class Banco{
    protected $saldo;
    protected $limiteSaldo;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function sacar($s);
    abstract protected function depositar($d);
}

class Itau extends Banco{
    public function sacar($s){
       $this->saldo -= $s;
       echo "<hr> Sacou: {$s} <br> seu saldo é de {$this->saldo}";
    }

    public function depositar($d){
        $this->saldo += $d;
        echo "<hr> Depositou: {$d} <br> seu saldo é de {$this->saldo}";
    }
}

$itau   = new Itau();
$itau->setSaldo(1000);
echo '<hr>';
echo "Saldo: {$itau->getSaldo()}";
$itau->sacar(200);
$itau->depositar(100);