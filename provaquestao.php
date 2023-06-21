<?php

$bmaior = $_POST['bmaior'];
$bmenor = $_POST['bmenor'];
$altura = $_POST['altura'];

echo "<h1>Calculo da área do trapézio<br>";

$area = ($bmaior + $bmenor)*$altura/2;

echo "<i><br>a área do trapézio tem o valor:</i> ".$area ."</h1>";


echo "<br><br><h2>Calculo da área do trapézio<br>";

$base = $_POST['base'];
$alt = $_POST['alt'];

$areat = ($base * $alt)/2;

echo "<i>o triângulo tem a área: </i>" .$areat ."</h2>";


echo "<br><br><h3>Calculo da área do retângulo<br>";

$baseret = $_POST['baseret'];
$altret = $_POST['altret'];

$arearet = $baseret * $altret;

echo "<i>o retângulo tem a área: </i>" .$arearet ."</h3>";








?>