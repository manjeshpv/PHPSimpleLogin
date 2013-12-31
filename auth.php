<?php


// execute this queries before checking this code by using mysql console or http://localhost/phpmyadmin/ (WAMP or XAMPP installed) -> SQL link
// CREATE DATABASE login;
// USE  login;
// CREATE TABLE user ( u VARCHAR(50) NOT NULL PRIMARY KEY, p VARCHAR(255) NOT NULL);
// INSERT INTO user VALUES ("admin", "admin");


$u=$_POST['u'];
$p=$_POST['p'];


 $connection = mysql_connect("localhost","root",""); // MySQL Database : localhost // MySQL Username: root // MySQL Password: "" blank or nothing in WAMP or XAMPP
 mysql_select_db("login"); // Selecting "user" database from mysql refers to query " USE DATABASE login "
 
 $result = mysql_query("select * from user where u='$u' and p='$p'"); // Executes the query and put results to $result variable // TABLE user 
 
 if( mysql_num_rows($result) == 1)  // check how many number of rows in the result if it is 1 row shows user name and password exist in DATABASSE login TABLE user
{
 
	echo "Logged in Successfully";
	$user = mysql_fetch_array($result);
	echo '<br>';
	echo 'Username : '.$user['u'].' or '.$user[0];
	echo '<br>';
	echo 'Password : '.$user['p'].' or '.$user[1];
}
else
{
	echo "Invalid Login";
}
?>