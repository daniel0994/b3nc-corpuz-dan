<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta  name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta  http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP Programming - Syntax, Printing and Variables</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php
		//Assignment

		/*$companyName = "";

		$companyName = "Tuitt Coding Boothcamp";
		echo $companyName;
		*/

		/*$counter = 0;
		echo $counter."<br>";
		//$counter = $counter + 150; //long
		$counter += 150; //shorthand
		echo $counter;*/

		/*$counter = 15;
		echo $counter."<br>";

		$counter += 5;
		echo $counter."<br>";

		$counter -= 3;
		echo $counter."<br>";

		$counter *= 8;
		echo $counter."<br>";

		$counter /= 16;
		echo $counter."<br>";

		$row = 12;
		$counter = $counter.$row;
		echo $counter."<br>";

		$counter %= 4;
		echo $counter."<br>";*/

		//BEDMAS OR PEMDAS
		//Braces/parenthesis, Division/Multiplacation, Addition/Subtraction

		/*echo 1+5*3;
		echo (1+5)*3;*/

		/*$bankBalance = 99;
		$deposit = 1000;

		if ($bankBalance < 100) {//true
			$bankBalance += $deposit;
			echo "Your balance is now updated.";
		}
		else  {//false
			echo "Current balance".$bankBalance;
			echo "Your bank balance is greater than or equal to 100";
		}

		echo "<br>".$bankBalance;*/

		//RELATIONAL OPERATORS

		/*$userName = "admin";
		$passWord = "";

		if($userName === "admin") {
			echo "Username: ADMIN";
		} else {
			echo "Username: ".$userName;
		}*/


		$firstNumber = 1;
		$secondNumber = 1;


		if($firstNumber > $secondNumber) 
			echo $firstNumber." is greater than ".$secondNumber."<br>";
		else 
			echo $firstNumber." is less than ".$secondNumber."<br>";

		if($firstNumber >= $secondNumber)
			echo $firstNumber." is greater than or equal to ".$secondNumber."<br>";
		
		if($firstNumber <= $secondNumber)
			echo $firstNumber." is less than or equal to ".$secondNumber."<br>";
	?>
	
</body>
</html>