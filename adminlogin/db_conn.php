<?php

$sname = "sql106.infinityfree.com";
$unmae = "if0_36420086ootr";
$password = "4PgzXPVr14X9wO";

$db_name = "if0_36420086_hurleydave";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}