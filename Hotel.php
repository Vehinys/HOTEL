<?php

class Hotel {                                                                         

    private string $nom; 
    private string $adresse;
    private int    $codePostale;
    private string $ville;
    private int    $nombreDeChambreReserv;
    private        $chambres = [];


    function __construct(string $nom, string $adresse, int $codePostale, string $ville, int $nombreDeChambreReserv) {

        $this-> nom                   = $nom; 
        $this-> adresse               = $adresse;
        $this-> codePostale           = $codePostale;
        $this-> ville                 = $ville;
        $this-> nombreDeChambreReserv = $nombreDeChambreReserv;
    }

    public function addChambres($chambre) {
        $this->chambres[] = $chambre;
    }

    public function calculChambres($chambre) {
        return count($this->$chambre);
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

    public function getNombreDeChambreReserv()
    {
        return $this->nombreDeChambreReserv;
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

    public function setNombreDeChambreReserv()
    {
        return $this->nombreDeChambreReserv;
    }

    public function afficherInfoHotel() {

        echo "<h2> {$this->nom} {$this-> ville}  </h2>";
        echo "{$this-> adresse} {$this-> codePostale}  {$this-> ville}<br><br>";
        
        echo "Nombre de chambres : 0 chambres.<br>"; 
        echo "Nombre de chambres reservées : {$this-> nombreDeChambreReserv} chambres.<br>";
        echo "Nombre de chambres disponibles :  0 chambres.<br>";

        foreach ($this->chambres as $chambre) {
            echo "";
        }
    }

}