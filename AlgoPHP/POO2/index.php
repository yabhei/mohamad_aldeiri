<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$CR7 = new Joueur("Ronaldo", "Cristiano", 37, "Portugais");
$Zinddin = new Joueur("Zidan", "Zinddin", 45, "Français");

$Esp = new Pays("Espagne");
$Ita = new Pays("Italie");
$Eng = new Pays("Angleterre");

$Real_madrid = new Equipe("Real Madrid", 1902, $Esp);
$juv = new Equipe("Juventus", 1897, $Ita);
$Manu = new Equipe("Man United", 1878, $Eng);
$Ars = new Equipe("Arsenal", 1878, $Eng);

$carCR7 = new Carriere($Real_madrid, $CR7, 2009);
$carCR72 = new Carriere($juv, $CR7, 2018);
$carCR73 = new Carriere($Manu, $CR7, 2021);
$carzin = new Carriere($Real_madrid, $Zinddin, 2000);

echo $CR7->ShowTeams();
echo "<br>";
echo $Zinddin->ShowTeams();
echo "<br>";
$Real_madrid->ShowPlayers();
echo "<br>";
$Eng->ShowTeams();




?>