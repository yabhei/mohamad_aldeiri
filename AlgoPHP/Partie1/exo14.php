<h1>Exercice 14 </h1>

<p> 
Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).



</p>

<h2> Résultat</h2>


<!-- <?php

$day=11;
$month=02;
$year=1993;
echo "Your date of  birth is : ". sprintf("%02s", $day)."/". sprintf("%02s", $month)."/".$year."<br>";
$dob=date_create($day."/".$month."/".$year);
$today=date_create(date('d/m/Y'));
$diff=date_diff($dob,$today);

echo "Your age is : <br>".date("Y") - $year." ans ";
echo date("m") - $month." Mois ";
echo date("d") - $day." jours <br>";
?> -->

<!-- <?php
$bday = new DateTime('01/02/1993'); // Your date of birth
$today = new Datetime(date('d/m/y'));
$diff = $today->diff($bday);
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
printf("\n");
?> -->

<?php 

//date of birth
$dateOfBirth = '01-02-1993';
 
// Create a datetime object using date of birth
$dob = new DateTime($dateOfBirth);
 
// Get current date
$now = new DateTime();
 
// Calculate the time difference between the two dates
$diff = $now->diff($dob);
 
// Get the age in years, months and days
echo "Age de la personne : ".$diff->y." ans ".$diff->m." mois ".$diff->d." jours.";

?>