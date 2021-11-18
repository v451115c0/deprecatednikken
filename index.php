<?php
	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $ip_conecction = "200.66.68.164";
    $db_conecction = "NIKKENCOL";
    
    $connectionInfo = array("Database" => $db_conecction, "UID" => "nikkenmk", "PWD" => "M4rk3t1n$");
    $conn = sqlsrv_connect($ip_conecction, $connectionInfo);
    if(!$conn){ die(print_r(sqlsrv_errors(), true)); }
    
    $counter = 0;
    
    $query = "SELECT TOP 1 * FROM OCRD";
    $recordSet = sqlsrv_query($conn, $query) or die( print_r( sqlsrv_errors(), true));
    while ($row = sqlsrv_fetch_array($recordSet, SQLSRV_FETCH_ASSOC)){
        echo "Hola";
    }