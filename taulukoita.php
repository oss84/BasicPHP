<?php 

<form>

Etunimi:<br>
<input type="text" name="etunimi"><br>
Sukunimi:<br>
<input type="text" name="sukunimi"><br>


</form>
$kaupungit = array("Helsinki","Tampere","Turku", "Espoo", "Vantaa"); 
	//echo $kaupungit[1];
	
$arrlenght = count($kaupungit); 

for ($i=0;$i<$arrlenght;$i++){
	echo $kaupungit[$i];
	echo "<br>";
}

$hinta = array("Banaani" =>"3", "Omena" =>"5", "Kirsikka" => "10", "Peruna"=>"2");

ksort($hinta);

foreach ($hinta as $i => $i_value) {
	echo "Key=" .$i. ", Value=" . $i_value;
	echo "<br>";
}






?>