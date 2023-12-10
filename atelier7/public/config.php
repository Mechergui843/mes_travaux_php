<?php
class config{
    function getConfig(){
        $dsn="mysql:host=localhost;dbname=atelier7";
        $username="root";
        $password="";
        $config=new PDO($dsn,$username,$password);
        return $config;
    }
}
?>