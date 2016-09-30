<?php
$q = "";
$q=$_POST["p"];
if($q=="Senjou123"){
	$response = "right";
}
else{
	$response = "wrong";	
}
echo $response;
?>