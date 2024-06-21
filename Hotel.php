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

        
        echo "<div style='width: 100px; padding: 5px 5px; background-color: #32d296; margin: 0 0 20px 0; color: white;'>";
        
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
            
            echo " <div style='width : 100px; padding: 5px 5px; background-color : #32d296; color : white;'>";
            
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
                
                echo "( {$chambre->getNombreDeLit()} lits - {$chambre->getPrix()} €" ;
                
                echo " - Wifi : " ;

                if ($chambre->getWifi()) {

                    echo " Oui";

                } else {

                    echo " Non";
                }

                echo " ) ";

                echo "du {$reservation->getDateArrivee()} au {$reservation->getDateDepart()}<br>";
            }
            $totalPrix = 0;

            foreach ($clientReservations as $reservation) {

                $totalPrix += $reservation->getChambre()->getPrix();
            }
            echo "<b>Total : {$this->resultPrix()} €</b>";
        } else {
            echo "Aucune réservation !<br>";
        }
        echo "</div><br>";
    }

    public function afficherInfoStatut() {

        echo "<div style='font-size: 15px;'>";

        echo "<h2 style='margin : 0;'>  Status des Chambres {$this->nom} {$this->ville}</h2>";
        
        echo "</div><br>";
    }


    public function afficherTableau() {
        echo "<div>";
        echo "<style>";
        echo "tr.chambre-row:hover {";
        echo "    background-color: coral;";
        echo "}";
        echo "td.etat-cell {";
        echo "    border-bottom: 1px solid #ddd;";
        echo "    color: white;";
        echo "}";
        echo "</style>";
        echo "<table style='width: 40%; text-align: center;'>";
        echo "<thead style='text-align: center;'>";
        echo "<tr>";
        echo "<th>CHAMBRE</th>";
        echo "<th>PRIX</th>";
        echo "<th>WIFI</th>";
        echo "<th>ETAT</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
    
        foreach ($this->chambres as $chambre) {
            $estReservee = $this->estChambreReservee($chambre);
            $etat = $estReservee ? 'Réservée' : 'Disponible';
            $wifiIcon = $chambre->getWifi();
    
            // Détermination de la couleur de fond pour la colonne ETAT
            $etatStyle = $estReservee ? 'background-color: red;' : 'background-color: green;';
    
            echo "<tr class='chambre-row'>";
            echo "<td style='border-bottom: 1px solid #ddd;'>Chambre {$chambre->getNomChambre()}</td>";
            echo "<td style='border-bottom: 1px solid #ddd;'>{$chambre->getPrix()}€</td>";
            echo "<td style='border-bottom: 1px solid #ddd;'>{$wifiIcon}</td>";
            echo "<td class='etat-cell' style='{$etatStyle}'>{$etat}</td>";
            echo "</tr>";
        }
    
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }

    private function estChambreReservee(Chambre $chambre) {
        foreach ($this->reservations as $reservation) {
            if ($reservation->getChambre() === $chambre) {
                return true;
            }
        }
        return false;
    }
    
}