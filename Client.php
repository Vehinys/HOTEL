<?php

class Client {                                                            // CREE UNE CLASS APPELE "CLIENT" ET VONT STOCKER LES ATTRIBUTS DANS LA CLASS "CLIENT"                                                                         

    private string $nom;                                                  // LE NOM DU CLIENT
    private string $prenom;                                               // LE PRENOM DU CLIENT
    private hotel  $hotel;                                                // L HOTEL CONCERNE PAR LE CLIENT
    private array  $reservations ;                                        // TABLEAU VIDE POUR GARDER LES INFORMATIONS DE RESERVATIONS




    function __construct(string $nom, string $prenom, hotel $hotel) {     // CONSTRUCTEUR DE LA CLASSE HOTEL
        $this-> nom           = $nom;                                     // INITIALISE LE NOM DU CLIENT
        $this-> prenom        = $prenom;                                  // INITIALISE LE PRENOM DU CLIENT
        $this-> hotel         = $hotel;                                   // INITIALISE L HOTEL CONCERNE PAR LE CLIENT
        $this-> reservations  = [];                                       // 
        $hotel -> addClient($this);                                       // AJOUTE LES INFORMATIONS CLIENT AU TABLEAU DES CLIENTS DE L HOTEL

    }

    public function addReservation(Reservation $reservation) {            // FONCTION POUR AJOUTER UNE RESERVATIONS A LA LISTE DES RESERVATIONS
        $this->reservations[] = $reservation;                             // AJOUTE LES INFORMATIONS DE RESERVATIONS A LA LISTE
    }

    // GET 

    public function getNom() {                                            // UNE FONCTION QUI RETOURNE LE NOM DU CLIENT
        return $this->nom;
    }

    public function getPrenom() {                                         // UNE FONCTION QUI RETOURNE LE PRENOM DU CLIENT
        return $this->prenom;
    }

    public function getHotel() {                                          // UNE FONCTION QUI RETOURNE LE HOTEL DU CLIENT
        return $this->hotel;
    }

    public function getReservations() {                                   // UNE FONCTION QUI RETOURNE LE RESERVATION DU CLIENT
        return $this->reservations;
    }

}