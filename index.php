<?php
	$dbHost = '104.130.46.73:3306';
    $dbName = 'nikkenla_site';
    $dbUser = 'nikkenla_mkrt';
    $dbPass = 'NNikken2011$$';

    try {
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conectado";
    }
    catch(Exception $e){
        exit("Error al conectar: " . $e->getMessage());
    }