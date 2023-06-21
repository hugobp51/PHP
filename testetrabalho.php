<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$data = $_POST['date'];
$exp = $_POST['experiencia'];

echo "olá, " .$nome . " " .$sobrenome . "! <br>Na data de hoje (" .$data  .") viemos agradecer por enviar seu formulario.<br>";
echo "<hr> no seu email (" .$email .") estaremos entrando em contato para continuarmos o processo seletivo.<br>"  ;
echo "<br>";
echo "<fieldset> sua experiencia relatada como:  '" .$exp  ."' <br>está sendo cuidadosamente analisada pela nosssa equipe de apoio para assim te passarmos o melhor cargo disponível.</fieldset>";
echo "<b>Obrigado!!!!</b>"

?>