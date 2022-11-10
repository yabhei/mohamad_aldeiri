<?php

$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];
function var_dump1($arrofelem)
{
    foreach ($arrofelem as $el) {
        if (gettype($el) == "array") {
            echo gettype($el) . "( ";
            for ($i = 0; $i < sizeof($el); $i++) {
                echo "[" . $i . "]" . "=>" . $el[$i] . "  " . strlen($el[$i]) . "  ";
            }
            echo " )";
        } elseif (gettype($el) == "string") {
            echo gettype($el) . " (" . strlen($el) . " ) " . $el . " <br>";
        } else
            echo gettype($el) . " (" . $el . " )" . "<br>";

    }
}
var_dump1($tableauValeurs);
?>