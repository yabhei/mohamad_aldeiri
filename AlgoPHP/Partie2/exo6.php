<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>vous êtes : </h3> <br>

    <?php

    $elements = ["Monsieur", "Madame", "Mademoiselle"];
    function alimenterListeDeroulante($elems)
    { ?>
    <select name="civilité" id="civil">
        <option value="">--choisissez votre civilité--</option>
        <?php foreach ($elems as $el) { ?>
        <option value="<?php $el ?>">
            <?php echo $el ?>
        </option>
        <?php } ?>

    </select>

    <?php }
    alimenterListeDeroulante($elements);
    ?>

</body>

</html>