<?php

require_once __DIR__."/../../../autoload.php";

use ProjetoAnimal\model\Pessoa;

class PessoaTest extends PHPUnit_Framework_TestCase{
    
    private $pessoa;
    
    public function setUp(){
        $this->pessoa = new Pessoa();
    }
    
    public function testDeveComer() {
        return $this->assertEquals('Estou comendo bala', $this->pessoa->comer());
    }

    public function testDeveCorrer() {
        return $this->assertEquals('Estou correndo com minhas pernas', $this->pessoa->correr());
    }

    public function testDeveFalar() {
        return $this->assertEquals('Estou conversando', $this->pessoa->falar());
    }
    
}
