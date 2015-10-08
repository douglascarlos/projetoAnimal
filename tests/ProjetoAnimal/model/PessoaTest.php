<?php
use ProjetoAnimal\model\Pessoa;

class PessoaTest extends PHPUnit_Framework_TestCase{
    
    private $pessoa;
    
    public function setUp(){
        $this->pessoa = new Pessoa();
    }
    
    public function testePessoaEstaComendoBala() {
        return $this->assertEquals('Estou comendo bala', $this->pessoa->comer());
    }

    public function testPessoaCorreComAsPernas() {
        return $this->assertEquals('Estou correndo com minhas pernas', $this->pessoa->correr());
    }

    public function testPessoaFalaComBoca() {
        return $this->assertEquals('Estou conversando', $this->pessoa->falar());
    }
    
}
