<?php

class Reserver {                                                                         

    private DateTime $dateArrivee; 
    private DateTime $dateDepart;


    function __construct($dateArrivee, $dateDepart)
    {
        $this->$dateArrivee = new DateTime($$dateArrivee); 
        $this->$dateDepart  = new DateTime($dateDepart); 
    }

    // GET 

    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }

    public function getDateDepart()
    {
        return $this->dateDepart;
    }
    
    // SET 

    public function setDateArrivee()
    {
        return $this->dateArrivee;
    }

    public function setDateDepart()
    {
        return $this->dateDepart;
    }

}