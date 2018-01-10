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
	//ACTIVITY 1
	/*
	$item = array('stars', 'shine', 'yellow');

	echo "Look at the $item[0], look how the $item[1] for you, and everything you do. <br> Yeah they were all $item[2]";
	*/

	//ACTIVITY 2

	/*
	echo "
		<ul>
			<li>$item[0]</li>
			<li>$item[1]</li>
			<li>$item[2]</li>
		</ul>
	";
	*/
	//ACTIVITY 3

	$players = array('Stephen Curry', 'Kawhi Leonard', 'LeBron James');
	$team = array('Warriors', 'Spurs', 'Cavaliers');
	$jersey = array('30', '2', '23');

	?>

	<?php
		for ($x=0;$x<=2;$x++) {
	?>
	<ul>
		<li>Players: <?php echo "$players[$x]"; ?></li>
		<li>Team: <?php echo "$team[$x]"; ?></li>
		<li>jersey: <?php echo "$jersey[$x]"; ?></li>
	</ul>

	<?php } ?>

	<table>
		<tr>
			<th>Players</th>
			<th>Team</th>
			<th>Jersey</th>
		</tr>

		
		<?php	
		for ($x=0;$x<=2;$x++) {
		echo "
			<tr>
				<td>$players[$x]</td>
				<td>$team[$x]</td>
				<td>$jersey[$x]</td>
			</tr>
			";
		}
		?>
		
	</table>

</body>
</html>