<?php
/*
// mysql_connect("sql7.freemysqlhosting.net", "sql7147806", "Ezuy3DJCJ8")
$conn = mysql_connect("sql7.freemysqlhosting.net", "sql7147806", "Ezuy3DJCJ8")
			or die("cannot connected");

// mysql_select_db("sql7147806", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = 'root';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
