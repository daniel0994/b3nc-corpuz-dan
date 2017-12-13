function changeMeToNumber() {
	var x = 101;
	document.getElementById("firstVar").innerHTML = x;

}

function getNewName() {
	var name = "Juan Dela Cruz";
	document.getElementById("secondVar").innerHTML = name;
}


function welcome() {
	var message = "Welcome to JavaScript programming!!!";
	document.getElementById("thirdVar").innerHTML = message;
}


/********************/
/*      Expression  */
/********************/
var var1 = 10;
var var2 = 3;
var result = 0;

function varValue() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);
}


document.getElementById("var1").value = var1;
document.getElementById("var2").value = var2;
document.getElementById("result").innerHTML = result;



function add() {
	varValue();
	var result = var1 + var2;
	document.getElementById("result").innerHTML = result;
}

function subtract() {
	varValue();
	result = var1 - var2;
	document.getElementById("result").innerHTML = result;
}

function multiply() {
	varValue();
	result = var1 * var2;
	document.getElementById("result").innerHTML = result;
}

function divide() {
	varValue();
	result = var1 / var2;
	document.getElementById("result").innerHTML = result;
}

function modulo() {
	varValue();
	result = var1 % var2;
	document.getElementById("result").innerHTML = result;
}
