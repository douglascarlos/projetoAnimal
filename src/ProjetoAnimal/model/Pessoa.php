<?php

namespace ProjetoAnimal\model;
use ProjetoAnimal\interfaces\Mamifero;

class Pessoa implements Mamifero {
    public function comer() {
        return "Estou comendo bala";
    }

    public function correr() {
        return "Estou correndo com minhas pernas";
    }

    public function falar() {
        return "Estou conversando";
    }   
}

?>
