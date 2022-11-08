<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie2/Exo2</title>
</head>
<body>
    
<h1>Exercice 4 </h1>

<p> 
A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML 
qui contiendra le lien hypertexte de la page Wikipédia de la capitale 
(le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).


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
        <th>Lien Wiki</th>
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
