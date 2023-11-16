<?php
class personne {

private $nom;
private $prenom;
private $adresse;
function __construct($n,$p,$adr){
 $this->nom=$n;
 $this->prenom=$p;
 $this->adresse=$adr;
}
function __destruct(){   
}
function __toString(){
    return "la personne ".$this->nom." ".$this->prenom." a pour adresse : ".$this->adresse;
}

function __set($att,$val)
{
$this->$att = $val;
}
function __get($att){
    return $this->$att;
}
}
?>