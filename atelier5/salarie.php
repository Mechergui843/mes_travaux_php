<?php
class salarie{
    private $code;
    private $nom;
    private $prenom;
    private $salaire;
    private $indemnité;
    function __construct($c,$n,$p,$s,$i){
        $this->nom=$n;
        $this->prenom=$p;
        $this->code=$c;
        $this->indemnité=$i;
        $this->salaire=$s;
    }
    function calculSalaire(){
        return $this->salaire+$this->indemnité;
    }
    function infoSalarie(){
        return "le salarie : ".$this->nom." ".$this->prenom." a pour code : ".$this->code." a pour salaire : ".$this->salaire." a pour indemnité : ".$this->indemnité; 
    }
}
?>