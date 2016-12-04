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

$databaseHost = 'sql7.freemysqlhosting.net';
$databaseName = 'sql7147806';
$databaseUsername = 'sql7147806';
$databasePassword = 'Ezuy3DJCJ8';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
