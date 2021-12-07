<?php
	$data = $_GET["data"];
	//Generate a key from a hash
	$key = md5(utf8_encode('13sIS4$2013*?1nF3mP'), true);

	//Take first 8 bytes of $key and append them to the end of $key.
	$key .= substr($key, 0, 8);

	//Pad for PKCS7
	$blockSize = mcrypt_get_block_size('tripledes', 'ecb');
	$len = strlen($data);
	$pad = $blockSize - ($len % $blockSize);
	$data .= str_repeat(chr($pad), $pad);

	//Encrypt data
	$encData = mcrypt_encrypt('tripledes', $key, $data, 'ecb');
	header ("Location: https://facturacionmex.nikkenlatam.com:8383/wfrmLogin.aspx?pId=".base64_encode($encData));
?>