<h1>Exercice 14 </h1>

<p> 
Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).



</p>

<h2> Résultat</h2>


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