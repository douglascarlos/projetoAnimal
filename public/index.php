<?php
require_once __DIR__."/../autoload.php";

use ProjetoAnimal\model\Pessoa;
use ProjetoAnimal\interfaces\Mamifero;

$pessoa = new Pessoa();
echo $pessoa->correr();
?>