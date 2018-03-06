<?php 

class Auto {
	
	//properties
	
	public $merkki;
	public $malli;
	public $vari;
	public $nopeus = 0;
	public $vuosimalli=2012;

	//konstruktori 
	
	public function __construct($merkki, $malli, $vari) {
		
		$this->merkki=$merkki;
		$this->malli=$malli;
		$this->vari=$vari;
	}	
	 

	public function autonTiedot () {
		
		echo "Autosi merkki on {$this->merkki} ja malli on {$this->malli} ja väri on {$this->vari} <br>";
		
	}
	
	
	public function lisaaNopeutta($kmh) {
		
		$this->nopeus += $kmh;
		if ($this->nopeus > 120) {
			
			echo "Ajat ylinopeutta <br>";
			
		}else {
			
			echo "Ajat sallittua nopeutta";
			
		}
		
		
	}
	
	public function vaihdaVm ($vluku) {
		$this->vuosimalli+=$vluku;
		if ($this->vuosimalli < 2012) {
			echo "Autosi on vanha <br>";
			
		}else {
			echo "Autosi on uusi";
		}
		
	}
	
	public function setTiedot ($merkki, $malli, $vari) {
		
	$this->merkki=$merkki;		
	$this->malli=$malli;
	$this->vari=$vari;
	}
	
	public function getTiedot(){
		return $this->merkki . " " . $this->malli;
		
	}
	
}

	$Skoda= new Auto("Skoda", "Octavia", "Punainen"); 
	$Volvo= new Auto("Volvo", "V50", "Sininen"); 
	
	$Skoda->autonTiedot();
	$Volvo->autonTiedot();
	$Skoda->lisaaNopeutta(50);
	$Volvo->lisaaNopeutta(150);
	$Skoda->vaihdaVm(5);
	$Skoda->setTiedot("Opel", "Corsa", "Keltainen");
	echo $Skoda->getTiedot();
	




?>