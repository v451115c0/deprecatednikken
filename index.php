<?php
	$serverName = "serverName\sqlexpress"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    
    if( $conn ) {
         echo "Conexión establecida.<br />";
    }else{
         echo "Conexión no se pudo establecer.<br />";
         die( print_r( sqlsrv_errors(), true));
    }