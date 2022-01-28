<?php
	define("hostname","localhost");
	define("user","id18039508_equipo7final");
	define("password","m8qlbxjjR>le)Oqx");
	define("database","id18039508_equipo7");
	
	function query($query){
		$conn=mysqli_connect(hostname,user,password,database);
		if(mysqli_connect_errno()){
			printf("La conexión al servidor de la base de datos falló: %s\n", mysqli_connect_error());
			exit();
		}
		$res=mysqli_query($conn,$query);
		$conn->close();
		return $res;
	}
?>