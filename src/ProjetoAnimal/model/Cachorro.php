<?php

namespace ProjetoAnimal\model;
use ProjetoAnimal\interfaces\Mamifero;

class Cachorro implements Mamifero {
    public function comer() {
        return "Estou comendo ração";
    }

    public function correr() {
        return "Estou correndo com quatro patas";
    }

    public function falar() {
        return "Estou latindo";
    }   
}

?>
