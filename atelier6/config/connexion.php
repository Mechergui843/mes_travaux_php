<?php
$dsn="mysql:host=localhost;dbname=atelier6";
$username="root";
$password="";
try{
$connexion=new PDO($dsn,$username,$password);
}
catch(Exception $e){
    echo "erreur de cnx". $e->getMessage();
}

?>