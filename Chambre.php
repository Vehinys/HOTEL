<?php

class Chambre {                                                                         

    private string $nomChambre; 
    private string $nombreDeLit;
    private bool   $wifi;
    private string $prix;
    private Hotel  $hotel;

    function __construct(string $nomChambre, string $nombreDeLit, bool $wifi, string $prix, Hotel $hotel)
    {
        $this-> nomChambre  = $nomChambre; 
        $this-> nombreDeLit = $nombreDeLit;
        $this-> wifi        = $wifi;
        $this-> prix        = $prix;
        $this-> hotel       = $hotel;
    }

    // GET 

    public function getNomChambre()
    {
        return $this->nomChambre;
    }

    public function getNombreDeLit()
    {
        return $this->nombreDeLit;
    }

    public function getWifi()
    {
        return $this->wifi;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getHotel()
    {
        return $this->hotel;
    }

    // SET 

    public function setNomChambre()
    {
        return $this->nomChambre;
    }

    public function setNombreDeLit()
    {
        return $this->nombreDeLit;
    }

    public function setWifi()
    {
        return $this->wifi;
    }

    public function setPrix()
    {
        return $this->prix;
    }

    public function setHotel()
    {
        return $this->hotel;
    }

}