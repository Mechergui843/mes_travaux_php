<?php 
class MiseEnForme{
    private $chaine;
    function __construct($c){
        $this->chaine=$c;
    }
    function  gras(){
        return "<strong>".$this->chaine."</strong>";
    }
    function  italique(){
        return "<i>".$this->chaine."</>";
    }
    function souligne(){
        return "<u>".$this->chaine."</u>";
    }
    function  majuscule(){
        return strtoupper( $this->chaine);
    }
}
?>