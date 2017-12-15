/*var userName = "daniel0994";
var firstName = "Dan";
var lastName = "Corpuz";

var message = "Your name is "+firstName+" "+lastName+" your username is "+ userName+ ".";

document.getElementById("yourMessage").innerHTML = message;*/

/**************/
/*if statement*/
/**************/

// var userName;
// var password;

// username = "mdanielcasdorpuz";
// password = "123asd456"



// if(userName == "mdanielcorpuz") {
// 	console.log("Your username is correct");
// } else {
// 	console.log("Your username is incorrect")
// }


// if(password == "123456") {
// 	console.log("Your password is correct");
// } else {
// 	console.log("Your password is incorrect")
// }



/**************/
/*   Loops    */
/**************/
/*(while, do.. while, for)*/


// var counter = 0;

// while (counter <= 10) {
// 	console.log(counter);
// 	counter += 2;
// }


// var counter  = 0;

// while (counter <= 100) {
// 	if (counter % 2 == 0) {
// 		console.log(counter);
// 	}
// 	counter++;
// }

// var yourName = "Juan Dela Cruz"
// var counter = 0;

// var markup = "";
// while (counter < 10) {
// 	// console.log(yourName);
// 	markup += "<p>"+yourName+"</p>"
// 	counter++;
// }

// document.getElementById("yourMessage").innerHTML = markup;



var expression = "";

function updateDisplay(val) {
	expression = expression + val;
	document.getElementById("display").innerHTML = expression;
}

function computeExpression() {
	// console.log(expression)
	var result = eval(expression);
	expression = result;
	document.getElementById("display").innerHTML = result;
}


function reset() {
	expression = "";
	document.getElementById("display").innerHTML = "0";
}

function deleteMe() {
    expression = expression.substr(0, expression.length - 1);

    if(expression != "") {
 		document.getElementById("display").innerHTML = expression;
 	} else {
 		document.getElementById("display").innerHTML = 0;
 	}
 }