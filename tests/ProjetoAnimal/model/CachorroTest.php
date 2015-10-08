<?php
require_once __DIR__."/../../../autoload.php";

use ProjetoAnimal\model\Cachorro;

class CachorroTest extends PHPUnit_Framework_TestCase {
    
    private $cachorro;
    
    public function setUp(){
        $this->cachorro = new Cachorro();
    }


    public function testDeveCorrer(){
        $this->assertEquals('Estou correndo com quatro patas', $this->cachorro->correr());
    }
    
    public function testDeveFalar(){
        $this->assertEquals('Estou latindo', $this->cachorro->falar());
    }
    
    public function testDeveComer(){
        $this->assertEquals('Estou comendo ração', $this->cachorro->comer());
    }
    
    
    
}

?>
