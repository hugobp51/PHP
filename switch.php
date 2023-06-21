<?php

$num = $_POST['num'];

switch($num){
    case 1:
        echo "janeiro tem 31 dias";
        break;

    case 2:
        echo "fevereiro tem 28 dias";
         break;
    
    case 3:
        echo "março tem 31 dias";
        break; 

    case 4:
        echo "abril tem 30 dias";
        break;


     case 5:
        echo "maio tem 31 dias";
        break;


    case 6:
        echo "junho tem 30 dias";
        break;


    case 7:
        echo "julho tem 31 dias";
        break;

    case 8:
        echo "agosto tem 31 dias";
        break;


    case 9:
        echo "setembro tem 30 dias";
        break;

        
    case 10:
        echo "outubro tem 31 dias";
        break;


     case 11:
        echo "novembro tem 30 dias";
        break;


    case 12:
        echo "dezembro tem 31 dias";
        break;        

    default: 
        echo"opção inválida, selecione um valor entre 1 e 12"; 
}






?>