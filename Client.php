<?php

class Client {                                                                         

    private string $nom; 
    private string $prenom;
    private hotel $hotel;




    function __construct(string $nom, string $prenom, hotel $hotel) {
        $this-> nom          = $nom; 
        $this-> prenom       = $prenom;
        $this-> hotel        = $hotel;

        $hotel -> addClient($this);

    }

    // GET 

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getHotel()
    {
        return $this->hotel;
    }

    // SET 

    public function setNom()
    {
        return $this->nom;
    }

    public function setPrenom()
    {
        return $this->prenom;
    }

    public function setHotel()
    {
        return $this->hotel;
    }

}