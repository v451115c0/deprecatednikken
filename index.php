<?php
	/*$dbHost = '172.24.16.75';
    $dbName = 'nikkenla_site';
    $dbUser = 'nikkenla_mkrt';
    $dbPass = 'NNikken2011$$';

    try {
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        exit("Error al conectar: " . $e->getMessage());
    }*/

    $nikkenla_marketingConnect = new mysqli("104.130.46.73", "nikkenla_mkrt", "NNikken2011$$", "nikkenla_marketing");
    if ($nikkenla_marketingConnect->connect_errno) {
        return "Fallo al conectar a MySQL<br>";
    }
    else{
        echo "conectado";
    }