<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <img src="http://my.mobirise.com/data/userpic/764.jpg" alt="Photo of small dog"> -->
    <?php
    $u = "http://my.mobirise.com/data/userpic/764.jpg";
    function repeterImage($url, $n)
    {
        for ($i = 1; $i <= $n; $i++) { ?>
    <img src=" <?php echo $url ?> " alt="Photo of small dog">

    <?php } ?>

    <?php }

    repeterImage($u, 4);
    ?>



</body>

</html>