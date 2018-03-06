<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<style type="text/css">

body {background-color: lightgrey;}
.btn1  {background-color: green;}
.btn2 {background-color: red;}
</style>
<body>
<h1>Laskin</h1>
<div class="div">
<form class= "form" action="" method="post" name="form">
<input type="text" name="num1" placeholder="Luku..."><br>
<select name="operator"><br>
<option>Plus</option>
<option>Miinus</option>
<option>Kerto</option>
<option>Jako</option>
</select><br>
<input type="text" name="num2" placeholder="Luku..."><br><br>
<button class="btn1" type="submit" name="submit" value="submit">Laske</button>
<button class="btn2" type="delete" name="delete" value="delete">Tyhjennä</button>
</form>
</div>
<br>
</h2>Tulos: </h2>

<?php 

if(isset($_POST['submit'])){
$num1=($_POST['num1']);
$opr=$_POST['operator'];
$num2=($_POST['num2']);
//$result="";
echo "<br>";
if(empty($num1 && $num2)) {
	echo "Täytä molemmat kentät!!";
}

switch($opr){
case "Plus": echo $num1 + $num2;
break;
case "Miinus": echo $num1 - $num2;
break;
case "Kerto": echo $num1 * $num2;
break;
case "Jako": echo $num1 / $num2;
break;


}


}


?>
</body>

</html>

