<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
 <!-- LASKIN -->
 <form action="" method="post">

 <p>Eka Luku: <input type="text" name="eka"></p>
  <p>Toka Luku: <input type="text" name="toka"></p>
   <p>Anna laskuoperaattori (+,-,*,/): <input type="text" name="operaattori"></p>

 <p><input type="submit" name="submit2" value="laske"></p>

 </form>
 <?php
 if(isset($_POST['submit2'])){
	 $eka= $_POST['eka'];
	 $toka= $_POST['toka'];
	 $operaattori = $_POST['operaattori'];
	 if($operaattori=="+"){
		 $tulos = $eka + $toka;
		 echo $tulos;
	 }elseif($operaattori=="-"){
		 $tulos = $eka - $toka;
		 echo $tulos;
	 }elseif($operaattori=="*"){
		 $tulos = $eka * $toka;
		 echo $tulos;
	 }elseif($operaattori=="/"){
		 $tulos = $eka / $toka;
		 echo $tulos;
	 }else {
		 echo "Tuntematon laskutoimitusoperaattori. Vain +,-,* ja / kelpaavat. Yritä uudestaan";
	 }
	
	
	 /*switch($operaattori){
		 case "+": echo round($eka + $toka, 2);
		 $tulos = $eka + $toka;
		 break;
		 case "-": echo $eka - $toka;
		 break;
		 case "*": echo $eka * $toka;
		 break;
		 case "/": echo $eka / $toka;
		 $tulos= $eka / $toka;
		 break;
		 
	 }*/
 }