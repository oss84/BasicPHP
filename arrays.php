<?php 

$autot = array("Skoda", "Volvo", "Opel", "Peugeot", "Toyota", "Mercedes"); 

//echo $autot[0];

foreach ($autot as $auto) {
	echo $auto . "<br>";
	
}

$kaupungit["Suomi"] = array("Helsinki","Tampere","Turku"); 
$kaupungit["Ruotsi"]= array("Tukholma","Göteborg","Malmö");
$kaupungit["Saksa"]= array("Berliini", "Hampuri", "Dortmund");

var_export($kaupungit);

$myCar='Skoda';
 switch ($myCar){
        case 1: 'Volvo';
        echo "Your car is Volvo";
            break;
        case 2: 'Skoda'; 
        echo "Your car is Skoda";
            break;
        case 3: 'Opel'; 
        echo "Your car is Opel";
            break;
 }
        







?>