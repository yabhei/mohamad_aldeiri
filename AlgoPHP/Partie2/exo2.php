<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie2/Exo2</title>
</head>
<body>
    
<h1>Exercice 2 </h1>

<p> 
Soit le tableau suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher un tableau HTML 
(notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) 
grâce à une fonction personnalisée.



</p>

<h2> Résultat</h2>

<style>
        td,th {
        border: 1px solid black;
    }
    table{
        border: 1px solid black;
        width: 100px;
    }
</style>
<table >
    <tr>
        <th> Pays </th>
        <th> Capitales </th>
    </tr>

<?php
    $capitales = array("France"=>"Paris","Allemagne"=>"Berlin", "USA"=>"washington","Italie"=>"Rome");
    function afficherTableHTML($cap){
        ksort($cap);
        // array_change_key_case($cap);
        foreach($cap as $pays => $villes){ ?>
        <tr>
          <td> <?php echo strtoupper($pays) ?> </td>
            <td> <?php echo $villes ?> </td>
        </tr>

        <?php } ?>
    <?php } 
    afficherTableHTML($capitales);
    ?>

</table>


</body>
</html>
