<?php 
require "salarie.php";
class contractuel extends salarie{
    private $date_contract;
    private $type_contrat;
function __construct($c,$n,$p,$s,$i,$d,$t){
parent::__construct($c,$n,$p,$s,$i);
$this->date_contract=$d;
$this->type_contrat=$t;
}
function infoSalarie()  {
   return parent::infoSalarie()." la date debut de contrat est : ".$this->date_contract." le type de contrat est : ".$this->type_contrat;

}  
}


?>