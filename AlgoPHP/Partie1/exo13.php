<h1>Exercice 13 </h1>

<p> 
Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.



</p>

<h2> Résultat</h2>


<?php
    $arrnotes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
    $sum=0;
    echo "Les notes obtenues par l'élève sont : ";
    for($i=0;$i<count($arrnotes);$i++){
        $sum=$sum+$arrnotes[$i];
        echo $arrnotes[$i]." ";
    }
    echo "<br> Sa moyenne générale est donc de : ".number_format($sum/count($arrnotes),2);
    


?>