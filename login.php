<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<link rel="stylesheet" href="styles/suwasetha.css">
	<link rel="stylesheet" href="styles/login.css">
</head>
<body>
<div id="grad1">
<center>
<img src="images/logo.png" width="150px" height="150px" >
<h1>Suwasetha Online Medical Portal</h1>
</center>
<div align="right">
<select>
	<option> Sinhala </option>
	<option> English </option>
</select>
</div>
</div>
<hr>
	<ul id="list">
		<li id="li"> <a href="#"> Home </a></li>
		<li id="li"> <a href="#"> Sign up </a></li>
		<li id="li"> <a href="#"> Sign in </a></li>
		<li id="li"> <a href="#"> Profile </a></li>	
		<li id="li"> <a href="#"> Doctor Details </a></li>
		<li id="li"> <a href="#"> My Appointments </a></li>
		<li id="li"> <a href="#"> Payments </a></li>
		<li id="li"> <a href="#"> Contact us </a></li>
		
	</ul>
<hr>

<center></br><br/> <br/>
<table border="4" width="35%" height="85%">
<td>

<center>
<img src="images/user-icon.png" alt="user-icon" width = "80px" height = "100px" class="logo"> </br>
<div class="Login-form"> 


<h1>Log In</h1>
<form action="login.php" target="_self" method="POST" onsubmit="return checkPasswords()" >
User name or Email <br/>
<input type="email" class="input-box" id="emailAdd" name="email" placeholder="your Email" style="width:250px;" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}"required> <br/> <br/>

Passsword <br/>
<input type="password" class="input-box"id="pwd" name="pwd" placeholder="your password" style="width:250px;" pattern="[a-z0-9]{5,8}" required> <br> <br>


<p>  
<input type="checkbox" > Remember me </p> 
<input type="submit" id="btnl" name ="btnl" value="Sign In"  ><br/> <br/>
<hr> <p class="OR"> </p>


<button type="button" class="facebook-btn"> Login with Facebook </button>
<button type="button" class="google-btn"> Login with Gooogle </button>

<p> Foget Your Password<a href="#"> Reset </a> </p>
<p> Do you havean't account ? <a href="register.php"> Sign in </a> </p>

<br/>
</div>
</table>
</center>



<br><br><br><br><br><br><br><br><br><br>
<hr>



<t<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<table border=0px style="width:100%">
<tr> 
	<td><img src="images/logo.png" width="150px" height="150px"></td>
	<td class="text1"><center><b> Suwasetha Online Medical Portal <br> 312/1,Galle Road,Mathara. <br> Email -suwasetha@gmail.com <br>  Hotline - 077-6325641 </b></center></td>
	<td><div align="right"> <img src="images/qr.png" width="150px" height="150px"> </div></td>
</tr>
</table>
<center> Design by <a href="http://www.sliit.lk" target="self">SLIIT</a></center>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>


</html>
