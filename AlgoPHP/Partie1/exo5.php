<h1>Exercice 5</h1>

<p> 
Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php

$montfrancs = 100;  // Montant en francs

$monteuros = $montfrancs*0.1524; // Montant en euros
echo "Montant en francs : ".$montfrancs; echo "<br>";
echo $montfrancs." francs = ".number_format($monteuros,2)." £";

?>