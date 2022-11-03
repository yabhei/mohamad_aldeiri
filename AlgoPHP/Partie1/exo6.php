<h1>Exercice 6</h1>

<p> 
Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2>Résultat</h2>

<?php

$prix = 9.99; // Prix unitaire de l’article
$qant = 5; //Quantité
$tva = 0.2; //Taux de TVA 

$prixhors = $prix * $qant; // prix hors taxe
$tax = $prixhors * $tva; // taxe
$total = $prixhors + $tax; // prix avec taxe
echo "Le montant de la facture à régler est de : " .$total." £";


?>