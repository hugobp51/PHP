<?php
$vetor[0] = $_REQUEST['1'];
$vetor[1] = $_REQUEST['2'];
$vetor[2] = $_REQUEST['3'];
$vetor[3] = $_REQUEST['4'];
$vetor[4] = $_REQUEST['5'];
$soma = 0;

for($i = 0; $i<count($vetor);$i++){

$soma = $soma + $vetor[$i];

}
echo "soma = " .$soma;





?>