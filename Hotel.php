<?php

class Hotel {
    private string $nom;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array  $chambres;
    private array  $reservations;
    private array  $clients;
    

    public function __construct(string $nom, string $adresse, string $codePostal, string $ville) {
        $this->nom          = $nom;
        $this->adresse      = $adresse;
        $this->codePostal   = $codePostal;
        $this->ville        = $ville;
        $this->chambres     = [];
        $this->reservations = [];
        $this->clients      = [];
    }

    public function addChambre(Chambre $chambre) {
        $this->chambres[] = $chambre;
    }

    public function addReservation(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

    public function addClient(client $client) {
        $this->clients[] = $client;
    }

    public function calculNbChambres() {
        return count($this->chambres);
    }

    public function nbReservations() {
        return count($this->reservations);
    }

    public function resultChambreLibre() {
        return $this->calculNbChambres() - $this->nbReservations();
    }

    private function afficherNbReserClient(Client $client) {

        $clientReservations = array_filter($this->reservations, function($reservation) use ($client) {
            return $reservation->getClient() === $client;
        });

        $nbReservations = count($clientReservations);

        echo "<div style='width: 90px; padding: 5px 5px; background-color: #32d296; margin: 0 0 20px 0; color: white;'>";
        echo "{$nbReservations} Réservations";
        echo "</div>";
    }
    public function resultPrix() {
        $totalPrix = 0;
    
        foreach ($this->reservations as $reservation) {
            $nbNuits = $reservation->getNbNuits();
            $prixParNuit = $reservation->getChambre()->getPrix();
            $totalPrix += $nbNuits * $prixParNuit;
        }
    
        return $totalPrix;
    }


    // GET 

    public function getNom() {
        return $this->nom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getCodePostal() {
        return $this->codePostal;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getChambre() {
        return $this->chambre;
    }

    public function getReservation() {
        return $this->reservation;
    }

    public function getClient() {
        return $this->client;
    }
    
    // SET 

    public function setNom() {
        return $this->nom;
    }

    public function setAdresse() {
        return $this->adresse;
    }

    public function setCodePostal() {
        return $this->codePostal;
    }

    public function setVille() {
        return $this->ville;
    }


    public function afficherInfoHotel() {

        echo " <div style='font-size : 15px ;  margin: 10px 0 0 0 ;'>";
        echo "<h2 style='margin : 0;'>  {$this->nom} {$this-> ville}  </h2>";
        echo "{$this-> adresse} {$this-> codePostal}  {$this-> ville}<br><br>";
        echo "Nombre total de chambres : {$this->calculNbChambres()}<br>" ;
        echo "Nombre de chambres réservées : {$this->nbReservations()} <br>"; 
        echo "Nombre de chambres disponibles : {$this->resultChambreLibre()} <br>";
        echo " </div>";
    }

    public function afficherInfoReservation() {

        echo " <div style='font-size : 15px ;  margin: 10px 0 0px 0 ;'>";
        echo "<h2 style='margin : 0;'>  Réservations de l'hôtel {$this->nom} {$this->ville}</h2>";
        echo " </div>";
    
        if ($this->nbReservations() > 0) {
            echo " <div style='width : 90px; padding: 5px 5px; background-color : #32d296; color : white;'>";
            echo "{$this->nbReservations()} Réservations";
            echo " </div>";
            echo "<div style='margin-top: 20px;'>";

            foreach ($this->reservations as $reservation) {
            
                $client = $reservation->getClient();
                $chambre = $reservation->getChambre();
                echo " <div style='font-size : 15px;'>";
                echo "{$client->getNom()} {$client->getPrenom()} - Chambre {$chambre->getNomChambre()} - du 
                {$reservation->getDateArrivee()} au {$reservation->getDateDepart()}</>";
                echo " </div>";
            }
            echo "</div>";
        } else {
            echo " <div style='padding: 5px 5px;margin: 0 0 20px 0; font-size : 15px;'>";
            echo "Aucune réservation !";
            echo " </div>";
        }
    }

    public function afficherInfoReserClient(Client $client) {
        echo "<div style='font-size: 15px;'>";
        echo "<h2 style='margin: 0;'>Réservations de {$client->getNom()} {$client->getPrenom()}</h2>";
        $this->afficherNbReserClient($client);
        $clientReservations = array_filter($this->reservations, function($reservation) use ($client) {
            return $reservation->getClient() === $client;
        });
    
        if (count($clientReservations) > 0) {
            foreach ($clientReservations as $reservation) {
                $chambre = $reservation->getChambre();
                $hotel = $chambre->getHotel();
                echo "<b>{$hotel->getNom()} {$hotel->getVille()} / </b>";
                echo "Chambre : {$chambre->getNomChambre()} ";
                echo "({$chambre->getNombreDeLit()} lits - {$chambre->getPrix()} € - ) ";
                echo "du {$reservation->getDateArrivee()} au {$reservation->getDateDepart()}<br>";
            }
            // Calcul du prix total des réservations du client
            $totalPrix = 0;
            foreach ($clientReservations as $reservation) {
                $totalPrix += $reservation->getChambre()->getPrix();
            }
            echo "<b>Total : {$this->resultPrix()} €</b>";
        } else {
            echo "Aucune réservation !<br>";
        }
        echo "</div>";
    }
}