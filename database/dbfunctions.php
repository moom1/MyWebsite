<?php

//sets connections
function setConnectionInfo($values=array()){
	try {
	$connString = $values[0];
	$user = $values[1];
	$password = $values[2];
	$pdo = new PDO($connString,$user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	return $pdo;
	}
	catch(PDOException $e){
		die($e->getMessage());
	}
}

//General Read function from any table
function read($table){
	$pdo = setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql = "SELECT * FROM $table" ;
	try {
	$statement = $pdo->prepare($sql);
	$statement->execute();
	}
	catch(PDOException $e){
		die($e->getMessage());
	}
	$pdo = null;
	return $statement;
}


?>