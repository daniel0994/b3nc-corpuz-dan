<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta  name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta  http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP Programming -Expressions, Control Statements, and loops</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<style>
.black-box {
	background-color: black;
	border: 1px solid black;
	display: inline-block;
	width: 35px;
	height: 25px;
	text-align: center;
	
}


.white-box {
	background-color: : #fff;
	border: 1px solid #fff;
	display: inline-block;
	width: 35px;
	height: 25px;
	text-align: center;
	
}

table, th,tr,td {
	border: 1px solid black;
	padding: 10px;
	border-collapse: collapse;

}

th {
	background-color: black;
	color: white;
}

</style>
</head>
<body>
	
<?php

//SOLUTION 1
// $color = 0;
// $num = 1;
// 	for($col = 1; $col <= 8; $col++) {
// 		for($row = 1; $row <= 8; $row++) {
// 			if ($color == 0) {
// 				echo '<span class="black-box"></span>';
// 				$color++;
// 			} else {
// 				echo '<span class="white-box"></span>';
// 				$color--;
// 			}
// 		}
// 		echo '<br>';
// 		if ($color == 0) 
// 			$color++;
// 		else
// 			$color--;
		
// 	} 

// echo '<br> <br>';

//SOlution 2

// for($col = 1; $col <= 8; $col++) {
// 	for($row = 1; $row <= 8; $row++) {
// 		$total= $row + $col;
// 		if($total%2 == 0) 
// 			echo '<span class="black-box"></span>';
// 		else 
// 			echo '<span class="white-box"></span>';
// 	} echo '<br>';
// }


//ACTIVITY 2

// $a = 1;
// $b = 2;
// $store = $a;
// echo 'Number before swap: <br>';
// echo '$a ='.$a.'<br>';
// echo '$b ='.$b.'<br>';

// $a = $b;
// $b = $store; 
// echo 'Number after swap: <br>'; 
// echo '$a ='.$a.'<br>';
// echo '$b ='.$b.'<br>';


//ACTIVITY 3 swap without temp variable

// $a = 2;
// $b = 3;

// echo 'Number before swap: <br>';
// echo '$a ='.$a.'<br>';
// echo '$b ='.$b.'<br>';

// $a += $b;
// $b = $a -$b;
// $a -= $b;

// $b = ($a + $b) - ($a = $b);  

// echo 'Number after swap: <br>'; 
// echo '$a ='.$a.'<br>';
// echo '$b ='.$b.'<br>';


// $colors = ['red', 'green', 'blue'];
// $arrlength = count($colors);

// for($x=0;$x<$arrlength;$x++) {
// 	echo $colors[$x].'<br>';
// }


//associative array;
 // array that use named keys that you assign.

//too loop all the values in associative array you need to use for each loop 

// $age = ["Peter"=> "35", "Ben"=> "37", "Joe"=> "43"];

// foreach($age as $arr_key => $arr_value) {
// 	echo "Key= ".$arr_key.", value = ". $arr_value. "<br>";
// }


//regular array for each

// $colors = ['red', 'green', 'blue'];

// foreach($colors as $key => $value) {
// 	echo "key = ".$key. " value = ".$value."<br>";
// }


// $ages = ['Ash' => 21, 'Misty' => 22, 'Brock' => 23];

// foreach($ages as $key => $age) {
// 	echo 'The age of '.$key.' is '.$age.'<br>';
// }

//Arry within an array
 //accessing multideminsional array

 // $team_ironman = ["Tony", "War Machine", "Vision"];
 // $team_cap = ["Cap America", "Bucky", "hawkeye", "Falcon"];
 // $civil_war = [$team_ironman, $team_cap];


 // echo $civil_war[0][0]."<br>";
 // echo $civil_war[1][0]."<br>";
 // echo $civil_war[0][2]."<br>";
 // echo $civil_war[1][1]."<br>";


$items = [
	['product' => 'lenovo laptop', 'price' => 600.00, 'quantity' => 100],
	['product' => 'Asus Tablet', 'price' => 100.00, 'quantity' => 10],
	['product' => 'Acer all-in-one', 'price' => 300.00, 'quantity' => 50],
	['product' => 'HP laptop', 'price' => 400.00, 'quantity' => 1],
	['product' => 'Dell Desktop', 'price' => 350.00, 'quantity' => 20],

];

 ?>

<ul>
	<?php
	foreach($items as $item) {
		echo '<li>'. $item['product'].'</li>';
		// foreach ($item as $key => $value) {
		// 	echo '<li>'.$value['product'].'</li>';
		// }
	}
	 ?>
</ul>

<ul>
	<?php
	foreach($items as $item) {
		echo '<li>'. $item['price'].'</li>';
		// foreach ($item as $key => $value) {
		// 	echo '<li>'.$value['product'].'</li>';
		// }
	}
	 ?>

</ul>

<ul>
	<?php
	foreach($items as $item) {
		echo '<li>'. $item['quantity'].'</li>';
		// foreach ($item as $key => $value) {
		// 	echo '<li>'.$value['product'].'</li>';
		// }
	}
	 ?>

</ul>

<hr>

<table>
	<thead>
		<th>Products</th>
		<th>Prices</th>
		<th>Quantity</th>
	</thead>
	<tbody>
		<?php 
			foreach($items as $item) {
				echo '<tr>';
				echo '<td>'.$item['product'].'</td>';
				echo '<td>'.$item['price'].'</td>';
				echo '<td>'.$item['quantity'].'</td>';
				echo '</tr>';
			}
		?>
	</tbody>
</table>


	
</body>
</html>