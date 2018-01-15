<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP</title>
</head>
<body>



<?php 

include_once 'assets/lib/hello_world.php';
require 'assets/lib/a_simple_require_file.php'; 
//prints a 2x3 table


// function print2by3Table() {
// 	echo "<table border=1>";
// 	for ($i=0; $i < 2; $i++) { 
// 		echo "<tr>";
		
// 		for ($j=0; $j < 3; $j++) { 
// 			echo "<td> Content </td>";
// 		}
// 		echo "</tr>";
// 	}

// 	echo "</table>";
// }


// echo print2by3Table();


//using parameters.
// function printTable($row, $col) {
// 	echo "<table border=1>";
// 	for ($i=0; $i < $row; $i++) { 
// 		echo "<tr>";
		
// 		for ($j=0; $j < $col; $j++) { 
// 			echo "<td> Content </td>";
// 		}
// 		echo "</tr>";
// 	}

// 	echo "</table>";
// }


// echo printTable(3,5);

// function add($a,$b) {
// 	$sum = $a + $b;
// 	return $sum;
// }

// $num1 = 20;
// $num2 = 12;
// $total = add($num1,$num2);

// echo "<h2> The Total is $total </h2>";

// function longdate($timestamp) {
// 	return date("l F jS Y", $timestamp);
// }


// echo longdate(time());;




// function fix_names($n1,$n2,$n3)
// {
// 		$n1 = ucfirst(strtolower($n1));
// 		$n2 = ucfirst(strtolower($n2));
// 		$n3 = ucfirst(strtolower($n3));
// 		return $n1." ".$n2." ".$n3; 
		
// }
// 	$a1 = "Billy";
// 	$a2 = "PeeJay";
// 	$a3 = "Allan";
// 	echo fix_names("Billy", "Peejay", "Allan")."<br>";


// function fix_names2() {
// 	global $a1; $a1 = ucfirst((strtolower($a1)));
// 	global $a2; $a2 = ucfirst((strtolower($a2)));
// 	global $a3; $a3 = ucfirst((strtolower($a3)));
// }


// echo $a1." ". $a2." ".$a3."<br>";
// fix_names2();
// echo $a1." ". $a2." ".$a3."<br>";

// /EXERCISE

// function areaOfRectangle($length, $width) {
// 	$area = $length * $width;
// 	return $area;
// }

// echo areaOfRectangle(4,7);


//importing PHP using required.
//iAmRequired();

?>

</body>
</html>


