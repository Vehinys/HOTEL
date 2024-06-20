<?php

class Chambre {                                                                         

    private string $numeroDeChambre; 
    private string $nombreDeLit;
    private bool $wifi;
    private string $prix;
    private Hotel $hotel;

    function __construct(string $numeroDeChambre, string $nombreDeLit, bool $wifi, string $prix, Hotel $hotel)
    {
        $this-> numeroDeChambre = $numeroDeChambre; 
        $this-> nombreDeLit = $nombreDeLit;
        $this-> wifi = $wifi;
        $this-> prix = $prix;
        $this-> hotel = $hotel;
        $this-> hotel -> addChambre ($this);
        $this-> hotel -> calculChambre ($this);
    }

    // GET 

    public function getNumeroDeChambre()
    {
        return $this->numeroDeChambre;
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

    public function setNumeroDeChambre()
    {
        return $this->numeroDeChambre;
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