<?php

class Reservation {                                                                                                                // CREE UNE CLASS APPELE "CHAMBRE" ET VONT STOCKER LES ATTRIBUTS DANS LA CLASS "CHAMBRE"
    private string      $dateArrivee;                                                                                              // DATE D ARRIVEE DE LA RESERVATION
    private string      $dateDepart;                                                                                               // DATE DE DEPART DE LA RESERVATION
    private Client      $client;                                                                                                   // CLIENT CONCERNE DE LA RESERVATION
    private Chambre     $chambre;                                                                                                  // CHAMBRE CONCERNE DE LA RESERVATION                                                                                       //  CONCERNE DE LA RESERVATION 
    private $nbNuits;                                                                                                              // LE NB DE NUIT DE LA RESERVATION

    public function __construct(Client $client, Chambre $chambre, string $dateArrivee, string $dateDepart, $nbNuits = null) {      // CONSTRUCTEUR DE LA CLASSE RESERVATION
        
        $this->client       = $client;                                                                                             // INITIALISE LE CLIENT CONCERNE DE LA RESERVATION
        $this->chambre      = $chambre;                                                                                            // INITIALISE LA CHAMBRE CONCERNE DE LA RESERVATION
        $this->dateArrivee  = $dateArrivee;                                                                                        // INITIALISE LA DATE D ARRIVEE DE LA RESERVATION 
        $this->dateDepart   = $dateDepart;                                                                                         // INITIALISE LA DATE DE DEPART DE LA RESERVATION
        $this->nbNuits      = $nbNuits;                                                                                            // INITIALISE LE NB DE NUITS DE LA RESERVATION
        $chambre->getHotel()->addReservation($this);                                                                               // INITIALISE LE NOM DE LA CHAMBRE 

    }

    public function addChambre(Chambre $chambre) {                                                                                 // FONCTION QUI AJOUTE UNE CHAMBRE DANS LE TABLEAU CHAMBRE
        $this->chambre[] = $chambre;
    }

    // GET 

    public function getDateArrivee() {                                                                                             // UNE FONCTION QUI RETOURNE LA DATE ARRIVEE DE LA RESERVATION
        return $this->dateArrivee;
    }

    public function getDateDepart() {                                                                                              // UNE FONCTION QUI RETOURNE LA DATE DE DEPARTDE LA RESERVATION
        return $this->dateDepart;
    }

    public function getClient() {                                                                                                  // UNE FONCTION QUI RETOURNE LE CLIENT DE LA RESERVATION
        return $this->client;
    }

    public function getChambre() {                                                                                                 // UNE FONCTION QUI RETOURNE LA CHAMBRE DE LA RESERVATION
        return $this->chambre;
    }

    public function getNbNuits() {                                                                                                 // UNE FONCTION QUI CALCUL LE NB DE NUIT ENTRE LA DATE D ARRIVER ET DE DEPART 
        $dateArrivee = new DateTime($this->dateArrivee);
        $dateDepart = new DateTime($this->dateDepart);
        return $dateDepart->diff($dateArrivee)->days;
    }
}