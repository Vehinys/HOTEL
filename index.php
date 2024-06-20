<?php

// INCLUSION DES CLASSES

include 'Chambre.php';
include 'Client.php';
include 'Hotel.php';
include 'Reserver.php';

// CREATION DE L'HOTEL AVEC LE NOMBRE DES CHAMBRES + LEURS ETATS

$hotel = new Hotel("Hilton ****","10 route de la Gare","67000","Strasbourg","0");

// AFFICHAGE 1

$hotel->afficherInfoHotel();

// CREATION DES CHAMBRES

 $chambre1  = new Chambre("Chambre : 1"  , "2 Lits"," Non","120 €");
// $chambre2  = new Chambre("Chambre : 2"  , "2 Lits"," Non","120 €");
// $chambre3  = new Chambre("Chambre : 3"  , "2 Lits"," Non","120 €");
// $chambre4  = new Chambre("Chambre : 4"  , "2 Lits"," Non","120 €");
// $chambre5  = new Chambre("Chambre : 5"  , "2 Lits"," Non","120 €");
// $chambre6  = new Chambre("Chambre : 6"  , "2 Lits"," Non","120 €");
// $chambre7  = new Chambre("Chambre : 7"  , "2 Lits"," Non","120 €");
// $chambre8  = new Chambre("Chambre : 8"  , "2 Lits"," Non","120 €");
// $chambre9  = new Chambre("Chambre : 9"  , "2 Lits"," Non","120 €");
// $chambre10 = new Chambre("Chambre : 10" , "2 Lits"," Oui","300 €");
// $chambre11 = new Chambre("Chambre : 11" , "2 Lits"," Oui","300 €");
// $chambre12 = new Chambre("Chambre : 12" , "2 Lits"," Oui","300 €");
// $chambre13 = new Chambre("Chambre : 13" , "2 Lits"," Oui","300 €");
// $chambre14 = new Chambre("Chambre : 14" , "2 Lits"," Oui","300 €");
// $chambre15 = new Chambre("Chambre : 15" , "2 Lits"," Oui","300 €");
// $chambre16 = new Chambre("Chambre : 16" , "2 Lits"," Oui","300 €");
// $chambre17 = new Chambre("Chambre : 17" , "2 Lits"," Oui","300 €");
// $chambre20 = new Chambre("Chambre : 20" , "2 Lits"," Oui","300 €");
// $chambre18 = new Chambre("Chambre : 18" , "2 Lits"," Oui","300 €");
// $chambre19 = new Chambre("Chambre : 19" , "2 Lits"," Oui","300 €");


