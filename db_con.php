<?php

$host_name='	pqxt96p7ysz6rn1f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$user_name='	khmvvjvn2a6mvsql';
$password='bcv8fkv49zqqi23p';
$db_name='db_hadith';

   $connection=mysqli_connect($host_name,$user_name,$password);
   if ($connection) {

   		$db_select=mysqli_select_db($connection,$db_name);
   				if ($db_select) {
   						//echo 'db selected';
   					# code...
   				}else{

   					die('Database selection fail'.mysqli_error($connection));
   				}
   }else{

   		die('database connection failed'.mysqli_error($connection));
   }


?>
