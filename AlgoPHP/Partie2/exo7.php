<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <fieldset style="width: 150px;">choose your color : <br>
        <?php

        $elements = ["Black" => "yes", "Pink" => "no", "Blue" => "yes"];
        function genererCheckbox($elem)
        {

            foreach ($elem as $el => $check) { ?>
        <input type="checkbox"> <label>
            <?php echo $el ?>
        </label> <br>


        <?php } ?>

        <?php }
        genererCheckbox($elements);
        ?>


    </fieldset>
</body>

</html>