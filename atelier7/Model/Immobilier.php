<?php
class Immobilier{
    private $reference;
    private $prorietaire;
    private $localite;
    private $nbPieces;
    private $domaineUsage;
    private $nature;
    private $nbEtage;
    private $surfaceCommune;
    function __construct($ref,$p,$loc,$nbp,$du,$nat,$nbe,$sc){
        $this->reference=$ref;
        $this->prorietaire=$p;
        $this->localite=$loc;
        $this->nbPieces=$nbp;
        $this->domaineUsage=$du;
        $this->nature=$nat;
        $this->nbEtage=$nbe;
        $this->surfaceCommune=$sc;

    }

    public function getSurfaceCommune()
    {
        return $this->surfaceCommune;
    }

    public function setSurfaceCommune($surfaceCommune): self
    {
        $this->surfaceCommune = $surfaceCommune;

        return $this;
    }

    public function getNbEtage()
    {
        return $this->nbEtage;
    }

    public function setNbEtage($nbEtage): self
    {
        $this->nbEtage = $nbEtage;

        return $this;
    }

    public function getNature()
    {
        return $this->nature;
    }

    public function setNature($nature): self
    {
        $this->nature = $nature;

        return $this;
    }

    public function getDomaineUsage()
    {
        return $this->domaineUsage;
    }

    public function setDomaineUsage($domaineUsage): self
    {
        $this->domaineUsage = $domaineUsage;

        return $this;
    }

    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    public function setNbPieces($nbPieces): self
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    public function getLocalite()
    {
        return $this->localite;
    }

    public function setLocalite($localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getProrietaire()
    {
        return $this->prorietaire;
    }


    public function setProrietaire($prorietaire): self
    {
        $this->prorietaire = $prorietaire;

        return $this;
    }


    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}