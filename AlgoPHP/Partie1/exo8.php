<h1>Exercice 8</h1>

<p> 
Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :
</p>

<h2>Résultat</h2>

<?php
$num = 8;
$resultat = 0;
echo "Table de ".$num.  " : <br> " ;
for($i = 1; $i <= 10; $i++){
    $resultat = $i * $num;
    echo $i. "x" .$num. " = ".$resultat. "<br>";
}


?>