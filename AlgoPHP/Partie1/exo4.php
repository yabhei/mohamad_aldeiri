<h1>Exercice 4</h1>

<p> 
Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2>Résultat</h2>

<?php

// $phrase = "Notre formation DL commence aujourd'hui";
$phrase = "Engage le jeu que je le gagne"; 
$sphrase = strtolower(str_replace(" ","",$phrase)); //replace the spaces and make it in small letters
// reverse it 
$nphrase = strrev($sphrase) ; 
// echo $nphrase ; echo "<br>";
if ($nphrase == $sphrase) {
echo "La phrase « ".$phrase." » est palindrome" ; echo "<br>";
}
else {
    echo "La phrase « ".$phrase." » n'est pas palindrome" ; echo "<br>";
}

?>