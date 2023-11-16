<?php

class ville
{
    private $nom;
    private $governorat;
    function __construct($n,$g){
        $this->nom=$n;
        $this->governorat=$g;
    }
    function __toString(){
        return "la ville ".$this->nom." est dans le governorat : ".$this->governorat;
    }

}

?>