<?php 
// song TITLE /////////////////
	function getTitle() {
		return 'Twelve Days Of Christmas ';
	}



// song LYRICS ////////////////////

	function getLyrics() {
		$days = ['first ', 'second ', 'third ', 'fourth ', 'fifth ', 'sixth ', 'seventh ', 'eigth ', 'ninth ', 'tenth ', 'elevent ', 'twelfth '];

		$gifts = [
			'A partrige in a pear tree',
			'Two turtle doves',
			'Three french hens',
			'Four calling birds',
			'Five golden rings',
			'Six geese a-laying',
			'Seven swans a-swimming',
			'Eight maids a-milking',
			'Nine ladies dancing ',
			'Ten lords a-leaping ',
			'Eleven pipers piping ',
			'Twelve drummers drumming'
		];

		for($i =0; $i< count($days); $i++) {
			echo '<div id="day'.$i.'">';
			echo 'On the '. $days[$i].' day of Christmas my true love gave to me <br>';

			if ($i == 0)
				echo $gifts[$i]. '<br>';
			else
				for($j = $i;$j >=0;$j--)  {
					if($j==0)
						echo 'And '.$gifts[$j].'<br>';
					else
						echo $gifts[$j].'<br>';
				}
			echo '</div>';
		}
	}



// MY SOL
		// foreach ($days as $index => $day) {
		// 		return 'On the '.$day.'day of Christmas my true love gave to me, <br>'.$gifts[$index];
		// 	}
		// }
	

	
 ?>