<h1>Exercice 12</h1>

<p> 
A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)


</p>

<h2>Résultat</h2>

<?php
// Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
$arrname =['Mickaël' => 'FRA', 'Virgile' => 'ESP', 'Marie-Claire' => 'ENG'];
ksort($arrname);
foreach($arrname as $x => $x_value){
    if($x_value == 'FRA'){
        echo 'Salut '.$x."<br>";
    }elseif($x_value == 'ESP'){
        echo 'Hola '.$x. "<br>";
    }else
        echo 'Hello '.$x."<br>" ;
}


?>