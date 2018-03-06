<!DOCTYPE html>
<html>
<body>

<form action="" method="post">
<p> Anna luku 1-10 <input name = "Luku" type="text"> </p> 
<input type="submit" input name = "submit" input value = "arvo luvut">
</form>

<?php 
if (isset($_POST['submit'])) {
$Luku=$_POST['Luku']; 

$Luku=(floor($Luku));
$arvottuluku=mt_rand(1,10); 

if ($Luku==$arvottuluku) {
	echo " Lukusi oli " ." ".$Luku ." ja arvottu numero oli " . $arvottuluku. " " . "joten voitit! ";
} else {
	echo " Ei voittoa, lukusi oli: " . " ". $Luku . " ja onnenluku olisi ollut: " . " " .$arvottuluku;
}


}










?>

</body>
</html>