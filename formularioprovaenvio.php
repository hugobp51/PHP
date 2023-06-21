<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$endereço = $_POST['end'];
$cidade = $_POST['cidade'];
$telefone = $_POST['fone'];
$ddd = $_POST['ddd'];
$usuario = $_POST['user'];
$senha = $_POST['senha'];


echo"<h1>dados fornecidos para contato<hr></h1><br> <br>";
echo"<fieldset>";
echo"Seu nome: " .$nome ."<br>";
echo"Seu sobrenome: ".$sobrenome ."<br>";
echo"Endereço de Email: ".$email ."<br>";
echo"Endereço residencial: ".$endereço ."<br>";
echo"Cidade onde reside: " .$cidade ."<br>";
echo"Telefone para contato: " .$ddd .$telefone ."<br>";
echo"</fieldset>";
echo"<br><br>";
echo"<h2>Nome de Usuário: " .$usuario;
echo"</h2>";
echo"<h3>Obrigado por se inscrever!!!!</h3>";




?>