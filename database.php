<?php 

if (isset($_POST['submit'])) {
$etunimi=$_POST['Etunimi'];
$sukunimi=$_POST['Sukunimi']; 
$viesti=$_POST['viesti'];
	
}

$host="localhost";
$user="root"; 
$passw="";
$db="foorumi01"; 

//yhteys tietokantaan 

$yhteys=mysqli_connect($host,$user,$passw,$db);

//tarkista yhteys

if ($yhteys) {
	
	echo "Yhteys ok! <br>";

} else {

	echo "Yhteys epäonnistui!";	
	
}

mysqli_query($yhteys,"INSERT INTO foorumi (Etunimi,Sukunimi,Viesti) VALUES ('$etunimi','$sukunimi','$viesti')");



$kysely= "SELECT * from foorumi";

$tulos = mysqli_query($yhteys,$kysely);

if ($tulos) {
	echo "Kysely onnistunut <br>";
}else {
	echo "Kysely ei onnistunut <br>";
}


 while ($rivi=mysqli_fetch_array($tulos)) {
	echo $rivi['Etunimi'] . " " . $rivi['Sukunimi'] . " " . $rivi['Viesti'] . "<br>";
} 









?>