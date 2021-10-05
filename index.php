<?php
	$dbHost = '52.52.67.160:3306';
    $dbName = 'mitiendanikken';
    $dbUser = 'forge';
    $dbPass = '8L8xQ1O9l6cVZMBtBBKS';

    try {
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conectado a la TV";
    }
    catch(Exception $e){
        exit("Error al conectar: " . $e->getMessage());
    }