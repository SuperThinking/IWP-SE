<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>~Registration~</title>

    <style>


body{
	margin: 0;
	padding: 0;
	background: #fff;
	color: #fff;
	font-family: Arial;
	font-size: 12px;
	overflow: hidden;
}

.body{
	position: absolute;
	top: -90px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url("reg.jpg");
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
	overflow: hidden;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #00008B !important;
}

.reg{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.reg input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.reg input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.reg input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #000000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.reg input[type=submit]:hover{
	opacity: 0.8;
}

.reg input[type=submit]:active{
	opacity: 0.6;
}

.reg input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.reg input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.reg input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>


</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>V<span>Tweet</span><br>Registration</div>
		</div>
		<br>
		
		<div class="reg">
		<form action = "Regis.php" method="POST">
				<input type="text" placeholder="Full Name" name="fn"><br><br>
				<input type="text" placeholder="VIT Email Id" name="eid"><br><br>
				<input type="text" placeholder="Registration Id" name="regid"><br><br>
				<input type="password" placeholder="Password" name="pass"><br><br>
				<input type="password" placeholder="Retype Password" name="repass"><br>
				<input type="submit" value="Submit!">
		</div>
		</form>

		

</body>

</html>