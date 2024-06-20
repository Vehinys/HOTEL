<?php

class Hotel {                                                                         

    private string $nom; 
    private string $adresse;
    private int    $codePostale;
    private string $ville;
    private        $chambres = [];

    function __construct(string $nom, string $adresse, int $codePostale, string $ville, array $chambres = null) {

        $this-> nom                   = $nom; 
        $this-> adresse               = $adresse;
        $this-> codePostale           = $codePostale;
        $this-> ville                 = $ville;
        $this-> chambres = [];
    }

    public function addChambre(Chambre $chambre) {
        $this->chambres[] = $chambre;
    }

    public function calculNbChambres() {
        return count($this->chambres);
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

    public function getCodePostale()
    {
        return $this->codePostale;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function getChambres()
    {
        return $this->chambres;
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

    public function setCodePostale()
    {
        return $this->codePostale;
    }

    public function setVille()
    {
        return $this->ville;
    }


    public function afficherInfoHotel() {
        echo " <div style='font-size : 20px ;  margin: 20px 0 10px 0 ;'>";
        echo "<h2> {$this->nom} {$this-> ville}  </h2>";
        echo "{$this-> adresse} {$this-> codePostale}  {$this-> ville}<br><br>";
        echo "Nombre total de chambres : {$this->calculNbChambres()}<br>" ;
        echo "Nombre de chambres réservées :  0<br>"; 
        echo "Nombre de chambres disponibles :  0<br>";
        echo " </div>";
    }

    public function afficherInfoReservation() {

        echo " <div style='font-size : 20px ;  margin: 20px 0 10px 0 ;'>";
        echo "<b>Réservation de l'hôtel {$this->nom} {$this-> ville}</b>";
        echo " </div>";

        echo " <div style=' width : 120px ;padding: 5px 5px ; background-color : green; color : white;'>";
        echo " RESERVATIONS ";
        echo " </div>";
    }

    // public function afficherInfoReservation2() {

    //     echo " <div style='font-size : 20px ;  margin: 20px 0 10px 0 ;'>";
    //     echo "<b>Réservation de l'hôtel {$this->nom} {$this-> ville}</b>";
    //     echo " </div>";

    //     echo " <div style=' width : 120px ;padding: 5px 5px ; background-color : green; color : white;'>";
    //     echo " RESERVATIONS ";
    //     echo " </div>";

        
    // }
}