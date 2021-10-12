<?php


$idadeList = [35, 4, 27, 9, 30, 41];
$nomes = ["Rafael", "Hannah", "Janilda", "Amanda"];

//echo count($idadeList) . PHP_EOL;

for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . $idadeList[$i] . PHP_EOL;
}

for ($i = 0; $i < count($idadeList); $i ++) {
    echo $idadeList[$i] . PHP_EOL;
}


?>