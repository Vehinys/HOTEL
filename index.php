<?php

// INCLUSION DES CLASSES

include 'Chambre.php';
include 'Client.php';
include 'Hotel.php';
include 'Reservation.php';

// CREATION DE L'HOTEL AVEC LE NOMBRE DES CHAMBRES + LEURS ETATS

$hotel1 = new Hotel("Hilton &#9733;&#9733;&#9733;&#9733;","10 route de la Gare","67000","Strasbourg");
$hotel2 = new Hotel("Regent &#9733;&#9733;&#9733;&#9733;","61 rue Dauphine","75006","Paris"); 

// CREATION DES CLIENTS

$client1 = new Client("Virgile","GIBELLO",$hotel1);
$client2 = new Client("Micka","MURMANN",$hotel1);

// CREATION DES CHAMBRES

// HOTEL 1

$ch1Hilton   = new Chambre(1, 2, false, 120, $hotel1);
$ch2Hilton   = new Chambre(2, 2, false, 120, $hotel1);
$ch3Hilton   = new Chambre(3, 2, false, 120, $hotel1);
$ch4Hilton   = new Chambre(4, 2, false, 120, $hotel1);
$ch5Hilton   = new Chambre(5, 2, false, 120, $hotel1);
$ch6Hilton   = new Chambre(6, 2, false, 120, $hotel1);
$ch7Hilton   = new Chambre(7, 2, false, 120, $hotel1);
$ch8Hilton   = new Chambre(8, 2, false, 120, $hotel1);
$ch9Hilton   = new Chambre(9, 2, false, 120, $hotel1);
$ch10Hilton  = new Chambre(10, 2, true, 300, $hotel1);
$ch11Hilton  = new Chambre(11, 2, true, 300, $hotel1);
$ch12Hilton  = new Chambre(12, 2, true, 300, $hotel1);
$ch13Hilton  = new Chambre(13, 2, true, 300, $hotel1);
$ch14Hilton  = new Chambre(14, 2, true, 300, $hotel1);
$ch15Hilton  = new Chambre(15, 2, true, 300, $hotel1);

$ch1Reng     = new Chambre(1, 2, false, 120, $hotel2);
$ch3Reng     = new Chambre(2, 2, false, 120, $hotel2);
$ch2Reng     = new Chambre(3, 2, false, 120, $hotel2);
$ch4Reng     = new Chambre(4, 2, false, 120, $hotel2);
$ch5Reng     = new Chambre(5, 2, false, 300, $hotel2);
$ch6Reng     = new Chambre(6, 2, false, 300, $hotel2);
$ch7Reng     = new Chambre(7, 2, false, 300, $hotel2);
$ch8Reng     = new Chambre(8, 2, false, 300, $hotel2);
$ch9Reng     = new Chambre(9, 2, false, 300, $hotel2);


$Reserver1   = new Reservation($client1, $ch1Hilton, "01-02-2021", "02-01-2021");
$Reserver2   = new Reservation($client2, $ch10Hilton, "01-01-2021", "03-01-2021");
$Reserver3   = new Reservation($client2, $ch4Hilton, "11-03-2021", "25-03-2021");

// AFFICHAGE 1

$hotel1->afficherInfoHotel();
// $hotel2->afficherInfoHotel();

// AFFICHAGE 2

$hotel1->afficherInfoReservation();

$hotel2->afficherInfoReservation();

// AFFICHAGE 3

$hotel1->afficherInfoReserClient($client2);


