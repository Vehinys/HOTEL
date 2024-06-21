<?php

class Reservation {
    private string $dateArrivee;
    private string $dateDepart;
    private Client $client;
    private Chambre $chambre;
    private $nbNuits; 

    public function __construct(Client $client, Chambre $chambre, string $dateArrivee, string $dateDepart, $nbNuits = null) {
        $this->client       = $client;
        $this->chambre      = $chambre;
        $this->dateArrivee  = $dateArrivee;
        $this->dateDepart   = $dateDepart;
        $this->nbNuits      = $nbNuits;
        $chambre->getHotel()->addReservation($this);

    }

    public function addChambre(Chambre $chambre) {
        $this->chambres[] = $chambre;
    }

    public function addReservation(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

    public function getNombreReservations() {
        return count($this->reservations);
    }

    public function afficherInfoHotel() {

        echo "Hotel: {$this->nom}\n";
        echo "Adresse: {$this->adresse}, {$this->codePostal} {$this->ville}";
        echo "Nombre de réservations: {$this->getNombreReservations()}";
    }

    // GET 

    public function getDateArrivee() {
        return $this->dateArrivee;
    }

    public function getDateDepart() {
        return $this->dateDepart;
    }

    public function getClient() {
        return $this->client;
    }

    public function getChambre() {
        return $this->chambre;
    }

    public function getReservation() {
        return $this->reservation;
    }

    public function getNbNuits() {
        $dateArrivee = new DateTime($this->dateArrivee);
        $dateDepart = new DateTime($this->dateDepart);
        return $dateDepart->diff($dateArrivee)->days;
    }


    // SET 

    public function setDateArrivee() {
        return $this->dateArrivee;
    }

    public function setDateDepart() {
        return $this->dateDepart;
    }

    public function setNbNuits() {
        return $this->nbNuits;
    }


}