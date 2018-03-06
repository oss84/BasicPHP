<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h3>Laskin<h3>
<form action="" method="post">
<p>Luku1<input name="luku1" type="text"></p>
<p>luku2<input name="luku2" type="text"></p>
<p>operaattori<input name="operaattori" type="text"></p>	
<input type=submit name="submit" value="Lähetä">
</form

<?php
	if (isset($_POST['submit'])){
	$luku1 = $_POST['luku1'];
	$luku2 = $_POST['luku2'];	
	$operaattori = $_POST['operaattori'];
		
	if ($operaattori=="+"){
			//laske yhteen
		echo $luku1 + $luku2;
		
	} else if ($operaattori == "-"){
			//vähennä $luku1 - $luku2
		echo $luku1 - $luku2;
		
	} else if ($operaattori == "*"){
			//kerro
		echo $luku1 * $luku2;
	
	} else if ($operaattori == "/"){
			//jaa
	 	echo $luku1 / $luku2;
} else {
			
		echo "En tunnistanut laskutoimitusta.<br> Yritä uudelleen (+,-,*,/)";
			
}	
		
		
		
		
	}
	?>
</body>
</html>