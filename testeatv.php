<?php

$nome = $_POST['nome'];
$nota1 = $_POST['n1'];
$nota2 = $_POST['n2'];

echo "aluno: " .$nome;
echo "<br>nota 1: " .$nota1;
echo "<br>nota 2: " .$nota2;

$media = ($nota1 + $nota2)/2;

echo "<br> o aluno " .$nome;
echo " ficou com media:  " .$media;




?>