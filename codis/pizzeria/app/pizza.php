<?php
    $pvp = 10;
    $IVA = 21;  // línia afegida després de la línia 2

    $pvp_public = $pvp * ((100 + $IVA) / 100);  // línia 5
    echo "El preu de la pizza bàsica és $pvp_public € (IVA inclòs)<br>";  // línia 6

    if (empty($_GET['ingr'])) {
        // Sense ingredients, ja es mostra el preu bàsic
    }
    else {
        $pvp_public = ((100 + $IVA) / 100) * ($pvp + count($_GET['ingr']));
        echo "Has demanat la pizza bàsica amb:<br>";
        foreach ($_GET['ingr'] as $ingredient) {
            if ($ingredient) {
                echo "* $ingredient<br>";
            }
        }
        echo "El preu és $pvp_public € (IVA inclòs)<br>";
    }
?>
