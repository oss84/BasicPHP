<?php 


$host = "localhost";
$user = "root";
$passwrd = "";
$db = "viestiseina";

$yhteys = mysqli_connect($host,$user,$passwrd,$db); 

//tarkasta yhteys 

if ($yhteys) {
	echo "Yhteys onnistui <br>";
}

$kysely="Select * from viesti";

$tulos = mysqli_query($yhteys,$kysely);
if ($tulos) {
	echo "Onnistunut kysely <br>";
}

while ($rivi = mysqli_fetch_array($tulos)){
	echo $rivi['ktunnus'] . " " . $rivi['viesti'] . " " . $rivi['aika'] . "<br>";
}

$insert = "INSERT INTO viesti (ktunnus, viesti) VALUES ('Doomsday' , 'How are you doing?')";
if (mysqli_query($yhteys, $insert)) {
	echo "New record created succesfully! <br>";
}else {
	echo "Error";
}

$insert = "INSERT INTO viesti (ktunnus, viesti) VALUES ('Pixelgun' , 'Alive and kicking!')";
if (mysqli_query($yhteys, $insert)) {
	echo "New record created succesfully! <br>";
}else {
	echo "Error";
}

mysqli_close($yhteys);

?>