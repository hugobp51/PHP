<?php
$num = $_POST['num'];

if($num >0){
    echo "$num é maior que zero";
}else if($num <0){
    echo "$num  é menor que zero";
}else{
    echo "$num igual a zero";
}
?>