<?php
$hewan = ["Neko", "Horse", "Rabbit", "Silverwoof", "Nizar"];
echo $hewan[0] . "<br>";
echo $hewan[3] . "<br>";
echo "<br>";

foreach ($hewan as $key => $value) {
    echo $value . "<br>";
}

$hewan[2] = "Gorilla";
echo $hewan[2];
