
function popup(name){
	if (name == 'button1'){
		document.getElementById("para").innerHTML = "Sample Credit card number";
		document.getElementById("img").src="images_T/16.png";}
	else if (name == 'button2'){
		document.getElementById("para").innerHTML = "Sample exp Date and Month";
		document.getElementById("img").src="images_T/17.png";}
	else if (name == 'button3'){
		document.getElementById("para").innerHTML = "Sample CVV code";
		document.getElementById("img").src="images_T/18.png";}
	else{
		alert("invalid");
	}
}

function res(){
	alert("do you want to reset all fill fields")
}

function linkp(){
	location.replace("index.html");	
}