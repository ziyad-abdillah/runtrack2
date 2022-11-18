<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "consonnes" => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z"],
    "voyelles" => ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"]
];

$voyelles = 0;
$consonnes = 0;

for ($i = 0; isset($str[$i]); $i++) {

    foreach ($dic["consonnes"] as $consonne) {
        if ($str[$i] === $consonne) {
            $consonnes++;
        }
    }
}

for ($i = 0; isset($str[$i]); $i++) {

    foreach ($dic["voyelles"] as $voyelle) {
        if ($str[$i] === $voyelle) {
            $voyelles++;
        }
    }
}
?>

<table>
    <tr>
        <th>Consonnes</th>
        <th>Voyelles</th>
    </tr>
    <tbody>
        <td> <?php echo $consonnes ?> </td>
        <td> <?php echo $voyelles ?> </td>

    </tbody>
</table>

</body>

</html>