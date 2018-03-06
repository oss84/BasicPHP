<!DOCTYPE html>
<html>
<head>
<title>LASKIN</title>
</head>

<body>
<form action = "" method ="post">
<p>Luku1 <input name = "Luku1" type= "text"></p>
<p>Laskuoperaattori <input name = "operaattori" type = "text"></p>
<p>Luku2 <input name = "Luku2" type= "text"></p>
<input type="submit" input name = "submit" input value = "Laske">




</form>

<?php 
if(isset($_POST['submit'])) {
$Luku1=$_POST['Luku1']; 
$Luku2=$_POST['Luku2']; 
$Operaattori = $_POST['operaattori'];
switch ($Operaattori) {
	
case "+" : 	echo $Luku1+$Luku2;
break;

case "-": echo $Luku1-$Luku2;
break;

case "/": echo $Luku1/$Luku2;
break; 

case "*": echo $Luku1*$Luku2;
break;	
	
	
}
	
	
	
}




?>


</body>

</html>
