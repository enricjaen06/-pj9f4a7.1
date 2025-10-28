<?php
    $pvp = 10;
    if (empty($_GET['ingr'])) {
        echo "Has demanat només la pizza bàsica. El preu és $pvp € (IVA inclòs)<br>";
    }
    else {
        $IVA = 21;
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
