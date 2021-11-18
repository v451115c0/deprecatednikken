<?php
	$serverName = "200.66.68.164\sqlexpress"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"NIKKENCOL", "UID"=>"nikkenmk", "PWD"=>"M4rk3t1n$");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    
    if( $conn ) {
         echo "Conexión establecida.<br />";
    }else{
         echo "Conexión no se pudo establecer.<br />";
         die( print_r( sqlsrv_errors(), true));
    }