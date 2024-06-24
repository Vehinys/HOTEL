<?php

class Chambre {                                                                                                                         // CREE UNE CLASS APPELE "CHAMBRE" ET VONT STOCKER LES ATTRIBUTS DANS LA CLASS "CHAMBRE"                                                                         

    private string $nomChambre;                                                                                                         // LE NOM DE LA CHAMBRE 
    private string $nombreDeLit;                                                                                                        // LE NB DE LIT DE LA CHAMBRE  
    private bool   $wifi;                                                                                                               // LE WIFI DE LA CHAMBRE  
    private string $prix;                                                                                                               // LE PRIX DE LA CHAMBRE  
    private bool   $reserver;                                                                                                           // LA RESERVATION CONCERNE PAR LA CHAMBRE 
    private Hotel  $hotel;                                                                                                              // L HOTEL CONCERNE PAR LA CHAMBRE


    function __construct(string $nomChambre, string $nombreDeLit, bool $wifi, string $prix, Hotel $hotel, bool $reserve = false) {      // CONSTRUCTEUR DE LA CLASSE CHAMBRE

        $this  -> nomChambre  = $nomChambre;                                                                                            // INITIALISE LE NOM DE LA CHAMBRE
        $this  -> nombreDeLit = $nombreDeLit;                                                                                           // INITIALISE LE NB DE LIT DE LA CHAMBRE
        $this  -> wifi        = $wifi;                                                                                                  // INITIALISE LE WIFI DE LA CHAMBRE
        $this  -> prix        = $prix;                                                                                                  // INITIALISE LE PRIX DE LA CHAMBRE
        $this  -> hotel       = $hotel;                                                                                                 // INITIALISE L HOTEL CONCERNE PAR CHAMBRE
        $this  -> reserver    = $reserve;                                                                                               // INITIALISE LA RESERVE CONCERNE PAR CHAMBRE
        $hotel -> addChambre($this);                                                                                                    // AJOUTE LES INFORMATIONS HOTEL AU TABLEAU DES CHAMBRES
    }

    // GET 

    public function getNomChambre() {                                                                                                   // UNE FONCTION QUI RETOURNE LE NOM DE LA CHAMBRE
        return $this->nomChambre;
    }

    public function getNombreDeLit() {                                                                                                  // UNE FONCTION QUI RETOURNE LE NB DE LA CHAMBRE
        return $this->nombreDeLit;
    }

    public function getWifi() {                                                                                                         // UNE FONCTION QUI RETOURNE LE WIFI DE LA CHAMBRE
        return $this->wifi ? "🛜" : '❌';
    }
    

    public function getPrix() {                                                                                                         // UNE FONCTION QUI RETOURNE LE PRIX DE LA CHAMBRE
        return $this->prix;
    }

    public function getHotel() {                                                                                                        // UNE FONCTION QUI RETOURNE L HOTEL DE LA CHAMBRE
        return $this->hotel;
    }

    public function getReserver() {                                                                                                     // UNE FONCTION QUI RETOURNE LE RESERVER DE LA CHAMBRE
        return $this->reserver;
    }
}