<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Partie2/exo5</title>
</head>

<body>
  <?php
  $nomsInput = ["Nome", "Prénome", "Ville"];

  function afficherInput($arrnoms)
  {
    foreach ($arrnoms as $nom) { ?>
  <label for="lname">
    <?php echo $nom ?>
  </label> <br />
  <input type="text" id="lname" name="fname" /> <br>
  <?php } ?>
  <?php }
  afficherInput($nomsInput);
  ?>
</body>

</html>