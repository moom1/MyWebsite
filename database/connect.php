<?php

require_once('dbFunctions.php');

   /*  $db_host = "localhost";
    $db_name = "abdulrb0_portfolio";
    $db_user = "abdulrb0_root";
    $db_pass = "7q26h8P86eC6acB"; */


    define('DBCONNECTION', 'mysql:host=localhost;dbname=abdulrb0_portfolio');
    define('DBUSER','abdulrb0_root');
    define('DBPASS','7q26h8P86eC6acB');


    $db = new PDO(DBCONNECTION, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


   /*  $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); */

    echo "using function3746";
    testF("test");
    $tests = read("test");

   /*  $sql = "SELECT * FROM test" ;
	try {
	$statement = $db->prepare($sql);
	$statement->execute();
	}s
	catch(PDOException $e){
		die($e->getMessage());
	}
    $db = null;
    $tests = $statement;

    */
    
    foreach ($tests as $test) {
	    echo $test[0];
    } 
    


?>
