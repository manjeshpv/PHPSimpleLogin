<?php
$u=$_POST['u'];
$p=$_POST['p'];

if( $u == "admin" && $p =="admin" )
{
	echo "Logged in Successfully";
}
else
{
	echo "Invalid Login";
}
?>