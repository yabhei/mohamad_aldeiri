<h1>Exercice 14 </h1>

<p> 
Créer une fonction personnalisée convertirMajRouge() 
permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.



</p>

<h2> Résultat</h2>


<?php 

$text = "Mon texte en paramètre";

function convertirMajRouge($t) {

    strtoupper($t);
    echo "<font color='red'>.$t.</font>";

}

convertirMajRouge($text);


?>