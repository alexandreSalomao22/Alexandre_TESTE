<?php

$host="localhost";
$user="root";
$pass="";
$banco="db_web";


$mysqli = new mysqli($host, $user, $pass, $banco);

if ($mysqli->connect_errno)
		echo"falha na conexão (" mysqli->connect_errno.") ".$mysqli->connect_errno;
?>