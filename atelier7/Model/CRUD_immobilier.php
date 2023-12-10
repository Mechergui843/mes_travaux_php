<?php
require_once "Immobilier.php";
require_once "../public/config.php";
class CRUD_immobilier{
    private $pdo;
    function __construct(){
        $obj=new config();
        $this->pdo=$obj->getConfig();
    }
    function findAll(){
        $sql="select * from immobilier";
        $res=$this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    function find($ref){
        $sql="select * from immobilier where reference=$ref";
        $res=$this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM); 
    }
    function delete($id){
        $sql="delete from immobilier where reference=$id";
        $res=$this->pdo->exec($sql);
        return $res;
    }
    function add(immobilier $i){
        $ref=$i->getReference();
        $p=$i->getProrietaire();
        $loc=$i->getLocalite();
        $nbp=$i->getNbPieces();
        $du=$i->getDomaineUsage();
        $nat=$i->getNature();
        $nbe=$i->getNbEtage();
        $sc=$i->getSurfaceCommune();
        $sql="insert into immobilier values($ref,'$p',$loc',$nbp,'$du',$nat',$nbe,$sc)";
        $res=$this->pdo->exec($sql);
        return $res;
    }

    function update(immobilier $i){
        $ref=$i->getReference();
        $p=$i->getProrietaire();
        $loc=$i->getLocalite();
        $nbp=$i->getNbPieces();
        $du=$i->getDomaineUsage();
        $nat=$i->getNature();
        $nbe=$i->getNbEtage();
        $sc=$i->getSurfaceCommune();
        $sql="update immobilier set proprietaire='$p',localite='$loc',nbPieces=$nbp,domaineUsage='$du',nature='$nat',nbEtage=$nbe,surfaceCommune=$sc where reference=$ref";
        $res=$this->pdo->exec($sql);
    }
}