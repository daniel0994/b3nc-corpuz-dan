<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta  name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta  http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP Programming -Expressions, Control Statements, and loops</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	
	<?php
	//Logical Operator

	//AND => &&, OR => ||, XOR, NOT => !

	// $a = 1;
	// $b = 0;

	// echo ($a OR $b). "<br>"; //1
	// echo ($a AND $b). "<br>"; //NULL
	// echo ($a XOR $b). "<br>"; //1
	// echo (!$a); //NULL

	// truth table

	// $a = 1;
	// $b = 0;

	// // $a AND $b == false
	// echo ($a AND $b). "<br>";

	// // $a OR $b == true
	// echo ($a OR $b). "<br>";


	// bmi = mass (kg) / height * height (m)

	// result:
	// 	< 16 = severe thinness
	// 	16 -17 = moderate thinness
	// 	17 - 18.5 = mild thinness
	// 	18.5 - 25 = normal
	// 	25- 30 = overweight
	// 	30 - 35 = class 1
	// 	35 -40 = class 2
	// 	> 40 = class 3

	// $mass = 76; //kg
	// $height = 1.7526; //m

	// $bmi = $mass / ($height * $height);

	// echo "your bmi is ". $bmi. '<br>';

	// // if ($bmi <= 16)
	// // 	echo 'Result: severe thinness';
	// // else if ($bmi > 16 AND $bmi <= 17)
	// // 	echo 'Result: moderate thinness';
	// // else if ($bmi > 17 AND $bmi <= 18.5)
	// // 	echo 'Result: mild thinness';
	// // else if ($bmi > 18.5 AND $bmi <= 25)
	// // 	echo 'Result: normal';
	// // else if ($bmi > 25 AND $bmi <=30)
	// // 	echo 'Result: overweight';
	// // else if ($bmi > 30 AND $bmi <=35)
	// // 	echo 'Result: obese class 1';
	// // else if ($bmi > 35 AND $bmi <= 40)
	// // 	echo 'Result: obese class 2';
	// // else
	// // 	echo 'Result: obese class 3';


	// switch ($bmi) {
	// 	case $bmi <= 16:
	// 	echo 'Result: severe thinness';
	// 	break;
	// 	case $bmi > 16 AND $bmi <= 17:
	// 	echo 'Result: moderate thinness';
	// 	break;
	// 	case $bmi > 17 AND $bmi <= 18.5:
	// 	echo 'Result: mild thinness';
	// 	break;
	// 	case $bmi > 18.5 AND $bmi <= 25:
	// 	echo 'Result: normal';
	// 	break;
	// 	case $bmi > 25 AND $bmi <=30:
	// 	echo 'Result: overweight';
	// 	break;
	// 	case $bmi > 30 AND $bmi <=35:
	// 	echo 'Result: obese class 1';
	// 	break;
	// 	case $bmi > 35 AND $bmi <= 40:
	// 	echo 'Result: obese class 2';
	// 	break;
	// 	default:
	// 	echo 'Result: obese class 3';
	// 	break;
	// }


	/////////////////////////WHILE LOOP

	// $number = 1;

	// while($number <= 10) {
	// 	echo $number. ' ';
	// 	$number++;
	// }


	////////////////////////Do.. While

	// $count = 0;
	// do {
	// 	echo $count.' ';
	// 	$count++;
	// } while($count <= 12);

	////////////////////////For loop

	$name = 'Juan dela cruz';

	for($counter = 1; $counter <= 10; $counter++) {
		echo $name.'<br>';
	}

	?>
</body>
</html>