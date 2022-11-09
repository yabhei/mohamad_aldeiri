<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset style="width: 250px;"> choose your civility : <br>
        <?php

        $elements = ["Monsieur", "Madame", "Mademoiselle"];
        function afficherRadio($elem)
        {

            foreach ($elem as $el) { ?>
        <input type="radio" name="exo9"> <label>
            <?php echo $el ?>
        </label> <br>


        <?php } ?>

        <?php }
        afficherRadio($elements);
        ?>
    </fieldset>
</body>

</html>