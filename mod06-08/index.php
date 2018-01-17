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
 	
 	<!-- google fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas" rel="stylesheet">

 	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 	


 </head>

 <body>

 	<div class="container">
 		<div class="title">
 			<h1>Twelve Days of Christmas</h1>
 		</div>

 		<div class="lyrics">
 			<?php 
 				echo getLyrics();
 			?>
 		</div>

 		

 		<button id="lyric">Get lyrics</button>
 		<button id="hideLyric">Hide lyrics</button>
 		</div>



 

 <!-- jQuery CDN -->
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

  <!-- custom JS -->
<script type="text/javascript" src="assets/js/script.js">


</script>
 </body>
 </html>