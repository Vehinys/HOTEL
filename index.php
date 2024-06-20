<?php

// INCLUSION DES CLASSES

include 'Chambre.php';
include 'Client.php';
include 'Hotel.php';
include 'Reserver.php';

// CREATION DE L'HOTEL AVEC LE NOMBRE DES CHAMBRES + LEURS ETATS

$hotel1 = new Hotel("Hilton &#9733;&#9733;&#9733;&#9733;","10 route de la Gare","67000","Strasbourg");
$hotel2 = new Hotel("Regent &#9733;&#9733;&#9733;&#9733;","61 rue Dauphine","75006","Paris"); 

// CREATION DES CHAMBRES

// HOTEL 1

$chambre1  = new Chambre("Chambre : 1"  , "2 Lits"," Non","120 €", $hotel1);
$chambre2  = new Chambre("Chambre : 2"  , "2 Lits"," Non","120 €", $hotel1);
$chambre3  = new Chambre("Chambre : 3"  , "2 Lits"," Non","120 €", $hotel1);
$chambre4  = new Chambre("Chambre : 4"  , "2 Lits"," Non","120 €", $hotel1);
$chambre5  = new Chambre("Chambre : 5"  , "2 Lits"," Non","120 €", $hotel1);

$chambre6  = new Chambre("Chambre : 6"  , "2 Lits"," Oui","300 €", $hotel1);
$chambre7  = new Chambre("Chambre : 7"  , "2 Lits"," oui","300 €", $hotel1);
$chambre8  = new Chambre("Chambre : 8"  , "2 Lits"," Oui","300 €", $hotel1);
$chambre9  = new Chambre("Chambre : 9"  , "2 Lits"," Oui","300 €", $hotel1);
$chambre10 = new Chambre("Chambre : 10" , "2 Lits"," Oui","300 €", $hotel1);

// HOTEL 2

$chambre11 = new Chambre("Chambre : 11" , "2 Lits"," Non","120 €", $hotel2);
$chambre12 = new Chambre("Chambre : 12" , "2 Lits"," Non","120 €", $hotel2);
$chambre13 = new Chambre("Chambre : 13" , "2 Lits"," Non","120 €", $hotel2);
$chambre14 = new Chambre("Chambre : 14" , "2 Lits"," Non","120 €", $hotel2);
$chambre15 = new Chambre("Chambre : 15" , "2 Lits"," Non","120 €", $hotel2);

$chambre16 = new Chambre("Chambre : 16" , "2 Lits"," Oui","300 €", $hotel2);
$chambre17 = new Chambre("Chambre : 17" , "2 Lits"," Oui","300 €", $hotel2);
$chambre20 = new Chambre("Chambre : 20" , "2 Lits"," Oui","300 €", $hotel2);
$chambre18 = new Chambre("Chambre : 18" , "2 Lits"," Oui","300 €", $hotel2);
$chambre19 = new Chambre("Chambre : 19" , "2 Lits"," Oui","300 €", $hotel2);
$chambre20 = new Chambre("Chambre : 19" , "2 Lits"," Oui","300 €", $hotel2);

// CREATION DES CLIENTS

$client1 = new Client("Virgile","GIBELLO",$hotel1,$chambre10);
$client2 = new Client("Micka","MURMANN",$hotel1,$chambre5);

// AFFICHAGE 1

$hotel1->afficherInfoHotel();

// AFFICHAGE 2

// $hotel1->afficherInfoReservation();
// $hotel2->afficherInfoReservation();

// // AFFICHAGE 3

// $hotel1->afficherInfoReservation2();
