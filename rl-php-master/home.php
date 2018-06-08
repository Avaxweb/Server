<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
	<meta charset="utf-8">
		<title>INGENIO MUSICAL</title>
		<link rel="shortcut icon" href="IMAGENES/DJ.png">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body background="IMAGENES/Goku doctrina egoista wallpaper.png" text="cyan" >
    


	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		
		<h1><center>BIENVENIDO</center></h1>
		<h2><center>GRACIAS POR REGISTRARSE</center></h2>
		


</div>
</div>
</div>
	</body>
</html>