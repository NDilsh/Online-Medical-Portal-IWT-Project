function checkPassword(){
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
		alert("Password Mismatch!");
		return false;
	}
	else{
		alert("Success!");
		return true;
	}
}

function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("btn1").disabled=false;
	}
	else{
		document.getElementById("btn1").disabled=true;
	}
}