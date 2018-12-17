<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=etcrt;charset=utf8",'root','11111111');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>