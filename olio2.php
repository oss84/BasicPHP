<?php 

class Oppilas {
	
	public $nimi;
	public $osoite;
	public $sposti;
	public $puhnro;
	
	public function __construct ($nimi, $osoite, $sposti, $puhnro) {
		
		$this->nimi=$nimi;
		$this->osoite=$osoite;
		$this->sposti=$sposti;
		$this->puhnro=$puhnro;
	}

	public function oppilasTiedot() {
		
		echo "Nimesi on {$this->nimi} ja osoitteesi on {$this->osoite}. Spostisi on {$this->sposti} ja puhelinnrosi on {$this->puhnro} <br>";
	}	
	
	
	
}

$oppilasA= new Oppilas("Ismo", "Suotie 2", "joo@joo.com", "123456"); 
$oppilasB = new Oppilas("Seppo", "Meritie 5", "Seppo@seppo.com", "789456"); 





?>