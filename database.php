<?php
error_reporting(0);
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("quiz_new",$cn)  or die("Could connect to Database");

// $cn = mysqli_connect("localhost","root","","quiz_new");

// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }
?>
