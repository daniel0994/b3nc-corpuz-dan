<?php 
// song TITLE /////////////////
	function getTitle() {
		return 'Twelve Days Of Christmas ';
	}



// song LYRICS ////////////////////

	function getLyrics($lyrics) {
		$days = ['first ', 'second ', 'third ', 'fourth ', 'fifth ', 'sixth ', 'seventh ', 'eigth ', 'ninth ', 'tenth ', 'elevent ', 'twelfth '];

		$gift = [
			'A partrige in a pear tree <br>',
			'Two turtle doves <br>',
			'Three french hens <br>',
			'Four calling birds <br>',
			'Five golden rings <br>',
			'Six geese a-laying <br>',
			'Seven swans a-swimming <br>',
			'Eight maids a-milking <br>',
			'Nine ladies dancing <br>',
			'Ten lords a-leaping <br>',
			'Eleven pipers piping <br>',
			'Twelve drummers drumming <br>'
		];

		foreach ($days as $day) {
			return 'On the '.$days[$lyrics].'day of Christmas my true love gave to me, <br>'.$gift[$lyrics];
		}
	}
 ?>