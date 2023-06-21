<?php
    $x = $_REQUEST['x'];

    switch ($x) {

        case 100:
            # code...
        $qt_cachorro_quente = 2; 
        $cachorro_quente = 1.7;
        
        $compra = $qt_cachorro_quente * $cachorro_quente;
        echo "O valor total a pagar é $compra reais";
        break;

        case 101:
            # code...
        $qt_bauru_simples = 3; 
        $bauru_simples = 2.30;
    
        $compra = $qt_bauru_ovo * $bauru_ovo;
        echo "O valor total a pagar é $compra reais";
        break; 

        case 102:
                # code...
        $qt_bauru_ovo = 4; 
        $bauru_ovo = 2.60;
    
        $compra = $qt_bauru_ovo * $bauru_ovo;
        echo "O valor total a pagar é $compra reais";
         break;  
            
        case 103:
            # code...
        $qt_hamburguer = 5; 
        $hamburguer = 2.40;

        $compra = $qt_hamburguer * $hamburguer;
        echo "O valor total a pagar é $compra reais";
        break;  
        
        case 104:

        $qt_cheeseburguer = 3; 
        $cheeseburguer = 2.50;

        $compra = $qt_cheeseburguer * $cheeseburguer;
        echo "O valor total a pagar é $compra reais";
        break;  
        
        case 105:
                # code...
        $qt_refrigerante = 3; 
        $refrigerante = 1;

        $compra = $qt_refrigerante * $refrigerante;
        echo "O valor total a pagar é $compra reais";
    
        break;  
            
        default:

            
            echo 'opção inválida';
            break;
}

?>