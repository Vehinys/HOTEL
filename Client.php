<?php

class Client {                                                                         // CREE UNE CLASS APPELE "PAYS" ET VONT STOCKER LES ATTRIBUTS DANS LA CLASS "PAYS"

    private string $nom; 
    private string $prenom;


    function __construct(string $nom, string $prenom)
    {
        $this-> nom = $nom; 
        $this-> prenom = $prenom;
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
    
    // SET 

    public function setNom()
    {
        return $this->nom;
    }

    public function setPrenom()
    {
        return $this->prenom;
    }

}