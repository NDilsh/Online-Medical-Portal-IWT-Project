function Data(id){
	if (id == 'button1'){
		document.getElementById("img1").src="images_T/7.jpg";
		document.getElementById("para").innerHTML = "1.Dr.Sirikumarana is not attend today. <br> 2.Next week cancer clinic canceled."}
	else if (id == 'button2'){
		document.getElementById("img1").src="images_T/8.jpg";
		document.getElementById("para").innerHTML = "1. 2020.09.03 - spectacles Donation Campaign <br> 2. 202010.05 - Blood Donation Campaign <br> 3. 2020.10.02 - Yoga Class <br> 4. 2020.11.10 - HIV Awareness Program <br>"}
	else if (id == 'button3'){
		document.getElementById("img1").src="images_T/9.jpg";
		document.getElementById("para").innerHTML = "1. Special In Patient Full Body Health Check Package for Males : Special Rate of Rs.53,000 (Normal Rate - Rs.91,000) <br> 2. Special In Patient Full Body Health Check Package for Females : Special Rate of Rs.52,000 (Normal Rate - Rs.90,000)<br> 3. Special 5% off on Hospital Fee on hospitalisation <br> 4. Special Out Patient Health Check up : Special Rate of Rs4,460 (Normal Rate Rs.9,200)<br> "
		}
	else{
		alert("invalid");
	}
}

function display(){
	alert("Do you want to open register page");
}