<?php 
$page = "projects";
require_once('database/connect.php');
require_once('database/dbFunctions.php');

$tests = read('test');
foreach ($tests as $test) {
  echo $test[0];
  echo "inside tests";
}

testF("TEST FUNCTION");
?>