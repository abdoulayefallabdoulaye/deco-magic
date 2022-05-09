<?php

    
	$receiver= "fallabdoulaye379@gmail.com";
	$sender="fallabdoulaye379@gmail.com";
	$subject="ttt";
	$body="yyy";
	

    if( mail($receiver,$subject,$body,$sender)){
		echo "Email envoye avec succes a ".$receiver;
	}else{
		echo "Desole,echec pendant l'envoi";
	}
        

 
?>


