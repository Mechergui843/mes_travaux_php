<?php
require_once "personne2.php";
class adulte extends personne2{
    private $metier;
    private $salaire;
    function __construct($n,$p,$m,$s){
        parent::__construct($n,$p);
        $this->metier=$m;
        $this->salaire=$s;
       }
       function getInfo(){
        return "la personne ".$this->nom." ".$this->prenom." a pour metier : ".$this->metier." a pour salaire : ".$this->salaire;
       }
}

?>