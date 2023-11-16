<?php
abstract class personne2{
    protected $nom;
    protected $prenom;
    function __construct($n,$p){
        $this->nom=$n;
        $this->prenom=$p;
       }
     abstract function getInfo();  
    }
?>