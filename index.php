<?php
	$nikkenla_marketingConnect = new mysqli("104.238.83.157", "nikkenla_mkrt", "NNikken2011$$", "nikkenla_marketing");
    if ($nikkenla_marketingConnect->connect_errno) {
        return "Fallo al conectar a MySQL<br>";
    }
    else{
        echo "conectado";
    }