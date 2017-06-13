<?php
function connect()
	{
		$db = new PDO("mysql:host=localhost;dbname=librairy","root","");
		return $db;
	}
?>