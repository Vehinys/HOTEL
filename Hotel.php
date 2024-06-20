<?php

class Hotel {                                                                         

    private string $nom; 
    private string $adresse;
    private int $codePostale;
    private string $ville;
    private int $nombreDeChambreReserv;
    private $chambres = [];

    function __construct(string $nom, string $adresse, int $codePostale, string $ville, int $nombreDeChambreReserv)
    {
        $this-> nom = $nom; 
        $this-> adresse = $adresse;
        $this-> codePostale = $codePostale;
        $this-> ville = $ville;
        $this-> nombreDeChambreReserv = $nombreDeChambreReserv;
    }

    public function addChambre($chambre) {                                         
        $this->chambres[] = $chambre;                                                  
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
        echo "{$this-> adresse} {$this-> codePostale}  {$this-> ville}<br>";

        echo "Nombre de chambres : <br>";
        echo "Nombre de chambres reservées : {$this-> nombreDeChambreReserv} <br>";
        echo "Nombre de chambres dispo :  <br>";

    }
}