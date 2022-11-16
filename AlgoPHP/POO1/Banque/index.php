<?php

require "Compte_Bancaire.php";
require "Titulaire.php";

$ocompte1 = new CompteBancaire("Compte C", 100, "£", "YAB");
$lcompte1 = new CompteBancaire("livret A", 300, "£", "YAB");
$ocompte2 = new CompteBancaire("Compte C", 500, "$", "ADA");
$lcompte2 = new CompteBancaire("Livret A", 1000, "$", "ADA");

$yab = new Titulaire("DERI", "Mhd", "01/02/1993", "Strasbourg", $ocompte1);
$adam = new Titulaire("Nemer", "Adam", "05/11/1987", "Strasbourg", $ocompte2);

$yab->printoftitulaire();




?>