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

    // GET 

    public function getNom()
    {
        return $this->nom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function getChambre()
    {
        return $this->chambre;
    }

    public function getReservation()
    {
        return $this->reservation;
    }

    public function getClient()
    {
        return $this->client;
    }
    
    // SET 

    public function setNom()
    {
        return $this->nom;
    }

    public function setAdresse()
    {
        return $this->adresse;
    }

    public function setCodePostal()
    {
        return $this->codePostal;
    }

    public function setVille()
    {
        return $this->ville;
    }


    public function afficherInfoHotel() {

        echo " <div style='font-size : 15px ;  margin: 20px 0 10px 0 ;'>";

        echo "<h2> {$this->nom} {$this-> ville}  </h2>";

        echo "{$this-> adresse} {$this-> codePostal}  {$this-> ville}<br><br>";

        echo "Nombre total de chambres : {$this->calculNbChambres()}<br>" ;

        echo "Nombre de chambres réservées : {$this->nbReservations()} <br>"; 

        echo "Nombre de chambres disponibles : {$this->resultChambreLibre()} <br>";

        echo " </div>";
    }

    public function afficherInfoReservation() {

        echo " <div style='font-size : 15px ;  margin: 20px 0 10px 0 ;'>";
    
        echo "<h2>Réservations de l'hôtel {$this->nom} {$this->ville}</h2>";
    
        echo " </div>";
    
        if ($this->nbReservations() > 0) {
    
            echo " <div style='width : 90px; padding: 5px 5px; background-color : #32d296; color : white;'>";
    
            echo "{$this->nbReservations()} Réservations";
    
            echo " </div>";
    
            echo "<div style='margin-top: 15px;'>";
            
            foreach ($this->reservations as $reservation) {
                
                $client = $reservation->getClient();
                $chambre = $reservation->getChambre();

                echo " <div style='font-size : 15px;'>";

                echo "{$client->getNom()} {$client->getPrenom()} - Chambre {$chambre->getNomChambre()} - </>";

                echo " </div>";

            }
    
            echo "</div>";
    
        } else {

            echo " <div style='padding: 5px 5px; font-size : 15px;'>";

            echo "Aucune réservation !";

            echo " </div>";

        }
    }

}