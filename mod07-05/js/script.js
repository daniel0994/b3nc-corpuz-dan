function generateTable() {
	var num = parseInt(document.inputForm.num.value);
	var step = parseInt(document.inputForm.step.value);

	var row = num / step;
	var element = "";
	var boxClass = "";
	var classBox = "";

	var boxHeight = row / 4;

	// calculation of cell height relative ot number of rows

	boxHeight = Math.round(boxHeight);
	boxHeight = 100 / boxHeight;

	var z = step;

	for (var x = 0; x <= (row/4); x++) {
		for (var y = 0; y < 4; y++) {
			if(z <= num) {
				if((x % 2 == 0) && (y % 2 == 0)) {
					boxClass = "black";
				}

				if ((x % 2 == 0) && (y % 2 == 1)) {
					boxClass = "white";
				}

				if ((x % 2 == 1) && (y % 2 == 0)) {
					boxClass = "white";
				}

				if ((x % 2 == 1) && (y % 2 == 1)) {
					boxClass = "black";
				}

				element += "<div class='box " + boxClass + "'><h2>"+ z +"</h2></div>";

				z += step;
			}
		}
	}

	document.getElementById('mainWrapper').innerHTML = element;
	classBox = document.getElementsByClassName("box"); /*arraw of element*/

	for (var i = 0; i < classBox.length; i++) {
		classBox[i].style.height = boxHeight + "vh";
		classBox[i].style.lineHeight = boxHeight + "vh";
	}
}