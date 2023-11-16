<?php
require_once "personne2.php";
class adolescent extends personne2{
    private $age;
    private $loisir;
    function __construct($n,$p,$a,$l){
        parent::__construct($n,$p);
        $this->age=$a;
        $this->loisir=$l;
       }
       function getInfo(){
        return "la personne ".$this->nom." ".$this->prenom." a pour age : ".$this->age." a pour loisir : ".$this->loisir;
       }
}

?>