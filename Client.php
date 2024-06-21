<?php

class Client {                                                                         

    private string $nom; 
    private string $prenom;
    private hotel  $hotel;
    private array  $reseverations;




    function __construct(string $nom, string $prenom, hotel $hotel) {
        $this-> nom           = $nom; 
        $this-> prenom        = $prenom;
        $this-> hotel         = $hotel;
        $this-> reservations  = [];
        $hotel -> addClient($this);

    }

    public function addReservation(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

    // GET 

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getHotel() {
        return $this->hotel;
    }

    public function getReservation() {
        return $this->reservation;
    }

    // SET 

    public function setNom() {
        return $this->nom;
    }

    public function setPrenom() {
        return $this->prenom;
    }

    public function setHotel() {
        return $this->hotel;
    }

}