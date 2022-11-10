<?php
function formaterDateFr($dat)
{
    list($day, $year) = explode("-", $dat);

    $newDated = date('l', strtotime($dat));
    $newDatem = date('F', strtotime($dat));

    echo $newDated . " " . $day . " " . $newDatem . " " . $year;


}

formaterDateFr("01-02-1993");

?>