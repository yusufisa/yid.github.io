<?php	
	try {
		$vt = new PDO("mysql:host=localhost;dbname=yusuf;charset=utf8","root","");
	} 
	catch (PDOException $e) 
	{
		echo $e->getmessage();
	}
?>