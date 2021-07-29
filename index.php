<?php
	$dbHost = '172.24.16.75';
    $dbName = 'nikkenla_site';
    $dbUser = 'nikkenla_mkrt';
    $dbPass = 'NNikken2011$$';

    try {
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        exit("Error al conectar: " . $e->getMessage());
    }