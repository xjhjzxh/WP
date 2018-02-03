<?php
$action = $_POST["action"];
$str = $_POST["str"];
if($action == "load"){
	$myfile = fopen("log", "r");
	echo fread($myfile,filesize("log"));
	fclose($myfile);
}
else if($action == "save"){
	$myfile = fopen("log", "w");
	echo fwrite($myfile, $str);
	fclose($myfile);
}
?>