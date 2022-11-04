<h1>Exercice 10</h1>

<p> 
A partir d’un montant à payer et d’une somme versée pour régler un achat, 
écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.
</p>

<h2>Résultat</h2>

<?php
$pmont = 157; //Montant à payer
$vmont = 500; //Montant versé
$rest =$vmont - $pmont;   //Reste à payer

echo "Montant à payer : ".$pmont. " £ <br> Montant versé : ".$vmont. " £ <br> Reste à payer : ".$rest. " £ <br>";
$i = $rest; // counter of while loop
$c =0;
$j=0;
$o=0;
$l=0;
// array_push($rendue,10);
// echo $rendue;


for($i = $rest; $i >0 ; $i){
    if($rest >=10){
                $rest = $rest - 10;
                $c=$c+1;
    }elseif($rest >=5){
                $rest = $rest - 5;
                $j=$j+1;
    }elseif($rest >=2){
                $rest = $rest - 2;
                $o=$o+1;
    }elseif($rest >=1){
                $rest = $rest - 1;
                $l=$l+1;
    }
            $i = $rest;

}

echo  $c." billets de 10 € <br>".$j.  " billet de 5 € <br>" .$o. " pièce de 2 € <br>" .$l. " pièce de 1 €"
// while($i !== 0){
//     if($rest >=10){
//         $reset = $reset - 10;
//         array_push($rendue,10);
//     }elseif($rest >=5){
//         $reset = $reset - 5;
//         array_push($rendue,5);
//     }elseif($rest >=2){
//         $reset = $reset - 2;
//         array_push($rendue,2);
//     }elseif($rest >=1){
//         $reset = $reset - 1;
//         array_push($rendue,1);
//     }
//     $i = $rest;
// }



?>
