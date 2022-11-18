<?php
$n=0;
function nbPremier($n) {
for ($i = 2; $i < $n; $i++){
    if ($n % $i == 0) {
        return false;
    }
}

return true;
}

for ($i = 3; $i < 100; $i++) {
    if (nbPremier($i)) {
        echo "$i<br>";
    }
}
