<?php 
	include './vendor/autoload.php';
	$url='http://localhost/api/server/server.php';
	$curl=new Curl\Curl();
	$curl->get($url);
	if($curl->error){
		echo $curl->error_code;
	}else{
		echo $curl->response;
	}
 ?>