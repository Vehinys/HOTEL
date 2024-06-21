<?php

class Chambre {                                                                         

    private string $nomChambre; 
    private string $nombreDeLit;
    private bool   $wifi;
    private string $prix;
    private bool   $reserver;
    private Hotel  $hotel;


    function __construct(string $nomChambre, string $nombreDeLit, bool $wifi, string $prix, Hotel $hotel, bool $reserve = false) {

        $this  -> nomChambre  = $nomChambre; 
        $this  -> nombreDeLit = $nombreDeLit;
        $this  -> wifi        = $wifi;
        $this  -> prix        = $prix;
        $this  -> hotel       = $hotel;
        $this  -> reserver    = $reserve;
        $hotel -> addChambre($this);
    }

    // GET 

    public function getNomChambre() {
        return $this->nomChambre;
    }

    public function getNombreDeLit() {
        return $this->nombreDeLit;
    }

    public function getWifi() {
        if ($this->wifi) {
            return "<span uk-icon='wifi'></span>"; // Icône Wifi activé
        } else {
            return "Non"; // Wifi désactivé
        }
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getHotel() {
        return $this->hotel;
    }

    public function getReserver() {
        return $this->reserver;
    }

    // SET 

    public function setNomChambre() {
        return $this->nomChambre;
    }

    public function setNombreDeLit() {
        return $this->nombreDeLit;
    }

    public function setWifi() {
        return $this->wifi;
    }

    public function setPrix() {
        return $this->prix;
    }

    public function setHotel() {
        return $this->hotel;
    }

    public function setReserver() {
        return $this->reserver;
    }

    public function __toString() {
        
    }
}