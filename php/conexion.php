<?php
	$conexion = mysql_connect('localhost','root','gemelo22');
	mysql_select_db('quimbaya_aptos', $conexion);
	
	// $conexion = mysql_connect('localhost','rmas2784','rmasbconfig001');
	// mysql_select_db('rmas2784_quimbaya_aptos', $conexion);

	if (!$conexion) {
		die('No se ha podido conectar al servidor' . mysql_error());
	}
?>