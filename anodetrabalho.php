<?php
$nome = $_POST['nome'];
$nasc = $_POST['nasc'];
$trab = $_POST['trab'];
$ano = $_POST['ano'];


    $idade = $ano - $nasc;

    $anostrab = $ano - $trab;



if($idade >=65){
    echo "vai dale, ta velho, pra casa já";
}else if($anostrab >=30){
    echo "trabalhou muito já, xau";
}else{
    echo "kkk se fudeu, vai trabalhar";
}
?>


