<?php

	if(!isset($_POST["username"]))
	{
		echo "value is empty";
		return;
	}
	
	$username = htmlspecialchars($_POST["username"]);
	$dbase = new PDO("mysql: host=localhost; dbname=ITPro", "root", "mehdi!1230");
	$qurey = $dbase->prepare("select id from tlb_userpass where Username = :userlogin");
		
	$qurey->execute(array(":userlogin" => $username));
	$count = $qurey->rowcount();
	if($count > 0)
	{
		echo "Exist";
	}
	else
		echo "NotExist";
