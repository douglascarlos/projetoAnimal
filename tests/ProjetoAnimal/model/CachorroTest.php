<?php
use ProjetoAnimal\model\Cachorro;

class CachorroTest extends PHPUnit_Framework_TestCase {
    
    private $cachorro;
    
    public function setUp(){
        $this->cachorro = new Cachorro();
    }


    public function testCachorroCorrendComQuatroPatas(){
        $this->assertEquals('Estou correndo com quatro patas', $this->cachorro->correr());
    }
    
    public function testCachorraNaoFaleEleLate(){
        $this->assertEquals('Estou latindo', $this->cachorro->falar());
    }
    
    public function testCachorroDeveComerRacao(){
        $this->assertEquals('Estou comendo ração', $this->cachorro->comer());
    }
    
    
    
}

?>
