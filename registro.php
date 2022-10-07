<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Registar</title>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "supermercadobd";

	// Create connection
	$conexion = new mysqli($servername, $username, $password,$database);
	if($conexion->connect_error) {
	die("Connection failed: " . $conn->connect_error);
    }
    
?>
</body>
</html>