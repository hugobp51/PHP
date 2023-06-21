<?php
$idade = $_GET['idade'];

		
     if ($idade>=5 && $idade<=10 ){
	    echo "jogador de idade $idade está na liga infantil ";
		
	}else if ($idade>=11 && $idade<=15 ){
			echo"jogador de idade $idade está na liga juvenil";
			
	}else if ($idade>=16 && $idade<=20 ){
		echo "jogador de idade $idade está na liga junior";
		
	}else if ($idade >=21 && $idade <=25){
		echo "jogador de idade $idade está na liga profissional";
		
	}else{
		echo "está fora da idade permitida";
	}
	

?>