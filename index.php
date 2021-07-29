<?php
	$usuario= 'Latamti';
	$pass = 'N1k3N$17!';
	$servidor = '200.66.68.173'; 
	$basedatos = 'RETOS_ESPECIALES';
				
	date_default_timezone_set('America/Mexico_City');
	$info = array('Database'=>$basedatos, 'UID'=>$usuario, 'PWD'=>$pass); 
	$conexion3 = sqlsrv_connect($servidor, $info); 

	if(!$conexion3){
		die( print_r( sqlsrv_errors(), true));
	}
	else{
        echo "conectado";
	};