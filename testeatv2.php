<?php

$nome = $_REQUEST['nome'];
$sal = $_REQUEST['sal'];
$vendas = $_REQUEST['vendas'];

$com = $vendas * 0.04;

echo "o funcionário " .$nome ." teve a comissão de 4%, totalizando o salário em: " .$sal + $com;

?>