<?php 
	$pdo=new PDO('mysql:host=localhost;dbname=api;charset=utf8','root','');
	$stmt=$pdo->query('select * from user');
	$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
	function resp($data,$status,$message){
		$res=[
			'status'=>$status,
			'message'=>$message,
			'data'=>$data
		];
		return json_encode($res,JSON_UNESCAPED_UNICODE);
	}
	echo resp($data,200,'ojbk');
 ?>