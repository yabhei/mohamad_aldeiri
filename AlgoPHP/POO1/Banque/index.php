<?php

require "Compte_Bancaire.php";

require_once "Titulaire.php";

$yab = new Titulaire("DERI", "Mhd", "01/02/1993", "Strasbourg");
$adam = new Titulaire("Nemer", "Adam", "05/11/1987", "Strasbourg");

$ocompte1 = new CompteBancaire("Compte C", 100, "£", $yab);
$lcompte1 = new CompteBancaire("livret A", 300, "£", $yab);
$ocompte2 = new CompteBancaire("Compte C", 500, "$", $adam);
$lcompte2 = new CompteBancaire("Livret A", 1000, "$", $adam);


$ocompte1->printofCB();
// $yab->printoftitulaire();
// $adam->printoftitulaire();




?>