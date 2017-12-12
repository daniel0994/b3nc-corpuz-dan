function hideAll() {
	document.getElementById('all').style.display = "none";
}

function showAll() {
	document.getElementById('all').style.display = "block";
}


function changeContent() {
	document.getElementById('content').innerHTML = "Mark Daniel Corpuz";
}


function changeHeight() {
	document.getElementById('attr').height = "300";
}

function changeImg() {
	document.getElementById('attr').src = "img/image2.gif";
}


function changeStyle() {
	document.getElementById('css').style.color = "red";
}


function getSum() {
	var x = document.getElementById("input1").value;
	var y = document.getElementById("input2").value;
	var sum = parseInt(x) + parseInt(y)


	document.getElementById("sum").innerHTML = sum;
}


document.getElementById("heading").innerHTML = "JavaScript";