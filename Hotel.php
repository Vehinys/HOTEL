<?php

class Hotel {                                                                                                   // CREE UNE CLASS APPELE "HOTEL" ET VONT STOCKER LES ATTRIBUTS DANS LA CLASS "HOTEL"

    private string $nom;                                                                                        // LE NOM DE L HOTEL
    private string $adresse;                                                                                    // ADRESSE DE L HOTEL
    private string $codePostal;                                                                                 // CODE POSTAL DE L HOTEL
    private string $ville;                                                                                      // VILLE DE L HOTEL
    private array  $chambres;                                                                                   // TABLEAU VIDE POUR GARDER LES INFORMATIONS DE CHAMBRES
    private array  $reservations;                                                                               // TABLEAU VIDE POUR GARDER LES INFORMATIONS DE RESERVATIONS
    private array  $clients;                                                                                    // TABLEAU VIDE POUR GARDER LES INFORMATIONS DE CLIENTS
    

    public function __construct(string $nom, string $adresse, string $codePostal, string $ville) {              // CONSTRUCTEUR DE LA CLASSE HOTEL
        $this->nom          = $nom;                                                                             // INITIALISE LE NOM DE HOTEL
        $this->adresse      = $adresse;                                                                         // INITIALISE L ADRESSE DE L HOTEL
        $this->codePostal   = $codePostal;                                                                      // INITIALISE LE CODE POSTAL DE L HOTEL
        $this->ville        = $ville;                                                                           // INITIALISE LA VILLE DE L HOTEL
        $this->chambres     = [];                                                                               // INITIALISE CHAMBRES
        $this->reservations = [];                                                                               // INITIALISE RESERVATIONS
        $this->clients      = [];                                                                               // INITIALISE CLIENTS
    }

    public function addChambre(Chambre $chambre) {                                                              // METHODE POUR AJOUTER UNE CHAMBRE A LA LISTE DES HOTELS
        $this->chambres[] = $chambre;                                                                           // AJOUTE LES INFORMATIONS DE CHMBRE A LA LISTE
    }

    public function addReservation(Reservation $reservation) {                                                  // METHODE POUR AJOUTER UNE RESERVATION A LA LISTE DES HOTELS
        $this->reservations[] = $reservation;                                                                   // AJOUTE LES INFORMATIONS DE CHMBRE A LA LISTE
    }

    public function addClient(client $client) {                                                                 // METHODE POUR AJOUTER UN CLIENT A LA LISTE DES HOTELS
        $this->clients[] = $client;                                                                             // AJOUTE LES INFORMATIONS DE CHMBRE A LA LISTE
    }

    
    public function calculNbChambres() {                                                                        // FONCTION QUI CALCUL LE NOMBRE DE CHAMBRES PAR HOTEL
        return count($this->chambres);                                                                        
    }

    
    public function nbReservations() {                                                                          // FONCTION QUI CALCUL LE NOMBRE DE RESERVATION PAR HOTEL
        return count($this->reservations);                                                                    
    }

    
    public function resultChambreLibre() {                                                                      // FONCTION QUI CALCUL LE NOMBRE DE CHAMBRE LIBRE
        return $this->calculNbChambres() - $this->nbReservations();
    }

    private function afficherNbReserClient(Client $client) {                                                    // FONCTION QUI CALCUL LE NOMBRE DE RESERVATION PAR CLIENT
        $clientReservations = array_filter($this->reservations, function($reservation) use ($client) {
            return $reservation->getClient() === $client;
        });

        $nbReservations = count($clientReservations);
        echo "<div style='width: 100px; padding: 5px 5px; 
        background-color: #32d296; margin: 0 0 20px 0; color: white;'>";
        echo "{$nbReservations} Réservations";
        echo "</div>";
    }

    public function resultPrix() {                                                                              // FONCTION QUI CALCUL LE PRIX TOTAL PAR LE NOMBRE DE NUIT * LE PRIX
        $totalPrix = 0;
        foreach ($this->reservations as $reservation) {
            $nbNuits = $reservation->getNbNuits();
            $prixParNuit = $reservation->getChambre()->getPrix();
            $totalPrix += $nbNuits * $prixParNuit;
        }
        return $totalPrix;
    }

    // GET 

    public function getNom() {                                                                                  // UNE FONCTION QUI RETOURNE LE NOM DE L'HOTEL
        return $this->nom;
    }

    public function getAdresse() {                                                                              // UNE FONCTION QUI RETOURNE LE ADRESSE DE L'HOTEL
        return $this->adresse;
    }

    public function getCodePostal() {                                                                           // UNE FONCTION QUI RETOURNE LE CODE POSTAL DE L'HOTEL
        return $this->codePostal;
    }

    public function getVille() {                                                                                // UNE FONCTION QUI RETOURNE LA VILLE DE L'HOTEL
        return $this->ville;
    }

    public function getChambres() {                                                                             // UNE FONCTION QUI RETOURNE LE CHAMBRES DE L'HOTEL
        return $this->chambres;
    }

    public function getReservations() {                                                                         // UNE FONCTION QUI RETOURNE LA RESERVATION DE L'HOTEL
        return $this->reservations;
    }

    public function getClients() {                                                                              // UNE FONCTION QUI RETOURNE LE CLIENT DE L'HOTEL
        return $this->clients;
    }
    
    public function afficherInfoHotel() {                                                                       // UNE FONCTION QUI AFFICHE LES INFORMATIONS DE L'HOTEL = NOM / VILLE / NOMBRE DE TOTAL DE CHAMBRE / NOMBRE DE CHAMBRE RESERVER / NOMBRE DE CHAMBRE DISPONIBLE

        echo " <div style='font-size : 15px ;  margin: 10px 0 0 0 ;'>";
        echo "<h2 style='margin : 0;'>  {$this->nom} {$this-> ville}  </h2>";
        echo "{$this-> adresse} {$this-> codePostal}  {$this-> ville}<br><br>";
        echo "Nombre total de chambres : {$this->calculNbChambres()}<br>" ;
        echo "Nombre de chambres réservées : {$this->nbReservations()} <br>"; 
        echo "Nombre de chambres disponibles : {$this->resultChambreLibre()} <br>";
        echo " </div>";
    }

    public function afficherInfoReservation() {                                                                 // UNE FONCTION QUI AFFICHE LES INFORMATIONS DE L'HOTEL
        
        echo " <div style='font-size : 15px ;  margin: 10px 0 0px 0 ;'>";
        echo "<h2 style='margin : 0;'>  Réservations de l'hôtel {$this->nom} {$this->ville}</h2>";
        echo " </div>";
    
        if ($this->nbReservations() > 0) {                                                                      // BOUCLE QUI DONNE LE NOMBRE DE RESERVATION TOTAL
            
            echo " <div style='width : 100px; padding: 5px 5px; background-color : #32d296; color : white;'>"; 
            echo "{$this->nbReservations()} Réservations";
            echo " </div>";
            echo "<div style='margin-top: 20px;'>";
            
            foreach ($this->reservations as $reservation) {                                                     // BOUCLE POUR AFFICHER LA LISTE DES CHAMBRES QUI ONT ETE RESERVER AVEC AFFICHAGE LE CLIENT / LE NOM DE LA CHAMBRE / LA DATE D ARRIVER / LA DATE DU DEPART           
                
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

    public function afficherInfoReserClient(Client $client) {                                                   // UNE FONCTION QUI AFFICHE LES RESERVATIONS DU CLIENT


        echo "<div style='font-size: 15px;'>";
        echo "<h2 style='margin: 0;'>Réservations de {$client->getNom()} {$client->getPrenom()}</h2>";
        $this->afficherNbReserClient($client);

        $clientReservations = array_filter($this->reservations, function($reservation) use ($client) {
            return $reservation->getClient() === $client;

        });

        if (count($clientReservations) > 0) {                                                                   // BOUCLE QUI AFFICHE LES RESERVATIONS DU CLIENT = HOTEL / VILLE / NOM DES CHAMBRE / NB DE LIT / PRIX / WIFI / DATE D ARRIVER ET DE DEPART

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

            foreach ($clientReservations as $reservation) {                                                     // BOUCLE POUR AFFICHER LE NOMBRE DE CHAMBRE DANS LE TABLEAU
                $totalPrix += $reservation->getChambre()->getPrix();
            }
            echo "<b>Total : {$this->resultPrix()} €</b>";

        } else {

            echo "Aucune réservation !<br>";
        }
        echo "</div><br>";
    }

    public function afficherInfoStatut() {                                                                      // FUNCTION QUI AFFICHE LE STATUT DES CHAMBRES

        echo "<div style='font-size: 15px;'>";
        echo "<h2 style='margin : 0;'>  Status des Chambres {$this->nom} {$this->ville}</h2>";
        echo "</div><br>";
    }


    public function afficherTableau() {                                                                         // FUNCTION QUI AFFICHE LE TABLEAU DU STATUT DES CHAMBRES PAR HOTEL
        echo "<div>";                                                                                           // AFFICHAGE D'UN TABLEAU 
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
    
        foreach ($this->chambres as $chambre) {                                                                 // BOUCLE POUR AFFICHER LE NOMBRE DE CHAMBRE DANS LE TABLEAU
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

    public function estChambreReservee(Chambre $chambre) {                                                      // FUNCTION QUI AFFICHE LE STATUT [SI IL EST DISPONIBLE OU PAS ] DES CHAMBRES PAR HOTEL
        foreach ($this->reservations as $reservation) {
            if ($reservation->getChambre() === $chambre) {
                return true;
            }
        }
        return false;
    }
    
}