<?php 

require_once 'assets/lib/twelve_days.php';




 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
 	<title><?php echo getTitle(); ?>Lyrics</title>
 	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 </head>
 <body>
<script type="text/javascript">
	var a = 0;
	function add() {
		document.getElementById("add").innerHTML += "<?php echo getLyrics(0); ?>";		
	}
</script>
 	<div class="container">
 		<div class="title">
 			<h1>Twelve Days of Christmas</h1>
 		</div>

 		<div class="lyrics">
 			<p id="add"></p>
 			
 			
 		</div>


 		<div>
 			<button onclick="add()">
 				add lyrics
 			</button>
 		</div>
 	</div>
 

<script type="text/javascript" src="assets/js/script.js"></script>
 </body>
 </html>