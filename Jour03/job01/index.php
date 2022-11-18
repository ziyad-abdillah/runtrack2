<?php

$tableau = [200,204,173,98,171,404,459,];

    foreach ($tableau as $nb) {
        if ($nb&1)
        echo "$nb est impair <br>";
        else
        echo "$nb est pair <br>";
    }

?>