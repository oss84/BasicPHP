<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

	// Luo laskin-funktio, joka ottaa vastaan kaksi lukua ja laskutoimitusoperaattorin (+,-,*,/) suorittaa tältä pohjalta laskutoimituksen ja tulostaa lopputuloksen näytölle
	
	
	function laskin($operaattori, $luku1, $luku2){
	if($operaattori=="+"){
		echo $luku1+$luku2;
	} elseif($operaattori=="-"){
		echo $luku1-$luku2;
	} elseif($operaattori=="*"){
		echo $luku1*$luku2;
	} elseif($operaattori=="/"){
		echo $luku1/$luku2;
	} else {
		echo "En tunnista syöttämääsi operaattoria. 
		Yritä uudestaan!";
		
		
	}
}
	laskin("*", 7,8);
	
		
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


</body>
</html>