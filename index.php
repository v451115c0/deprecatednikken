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

    try {
        $dbUser = 'nikkenla_mkrt';
        $dbPass = 'NNikken2011$$';
        $mbd = new PDO('mysql:host=104.130.46.73;dbname=nikkenla_office', $dbUser, $dbPass);
        foreach($mbd->query('SELECT * from banners limit 5') as $fila) {
            print_r($fila);
        }
        $mbd = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }