<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta  name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta  http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP Programming -Expressions, Control Statements, and loops</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<style>
/*.box {
	border: 1px solid black;
	padding: 10px;
	display: inline-block;
	width: 30px;
	height: 30px;
	text-align: center;
	line-height: 30px;
}*/
</style>
</head>
<body>
	
	<?php

//ACTIVITY 1
	// for($count = 1; $count <= 10; $count++) {
	// 	if($count == 10)
	// 		echo $count;
	// 	else
	// 		echo $count.'-';


//ACTIVITY 2
	// for($count = 1; $count <= 10; $count++) {
	// 	for($count2 = 1; $count2 <= 10; $count2++)  {
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }

//ACTIVITY 3

// $num = 1;
// 	for($num1 = 1; $num1 <= 10; $num1++) {
// 		for($num2 = 1; $num2 <= 10; $num2++) {
// 		echo '<span class="box">'.$num1 * $num2. '</span>';
// 		}
// 		echo '<br>';
// 	} 


//ACTIVITY 4 -5 

	// for($num1= 10; $num1>=1; $num1--) {
	// 	for($num2 = 1; $num2 <= $num1; $num2++){
	// 		echo '* ';
	// 	} echo '<br>';
	// }
	

//ACTIVITY 6

	for($num1 = 1; $num1 <= 50; $num1++) {
		if ($num1%5 == 0) {
			echo $num1.' Buzz <br>';
		}
		if ($num1%3 == 0) {
			echo $num1.' Fizz <br>';
		}
		if ($num1%15 ==0) {
			echo $num1.' FizzBuzz <br>';
		}
	}

?>


	
</body>
</html>