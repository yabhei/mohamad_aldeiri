<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>

        <?php
        $elementsradio = ["Développeur Logiciel", " Designer web", "Intégrateur", "Chef de projet"];

        $nomsInput = ["Nome", "Prénome", "Ville", "Adresse e-mail", "Sexe"];

        function afficherInput($arrnoms)
        {
            foreach ($arrnoms as $x) { ?>
        <label for="lname">
            <?php echo $x ?>
        </label> <br />
        <input type="text" id="lname" name="fname" /> <br>
        <?php } ?>

        <?php }


        function afficherRadio($elem)
        {

            foreach ($elem as $el) { ?>
        <input type="radio" name="exo10"> <label>
            <?php echo $el ?>
        </label> <br>


        <?php } ?>

        <?php }

        afficherInput($nomsInput); ?>
        <div>
            <br> Intitulé de formation : <br><br>
            <?php afficherRadio($elementsradio);
            ?>
        </div>
        <br>
        <input type="button" value="Submit">
    </form>
</body>

</html>