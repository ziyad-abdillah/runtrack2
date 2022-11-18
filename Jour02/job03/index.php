<?php
$i = 0;
    for($i==0;$i<=100;$i++){
        if($i<=20){
            echo "<i>$i</i><br>";
        }
        elseif($i>=25 && $i<=50){
            if($i==42){
                echo "LaPlateforme_<br>";
            }
            else{
                echo "<u>$i</u><br>";
            }
        }
        else{
            echo "$i<br>";
        }
    }