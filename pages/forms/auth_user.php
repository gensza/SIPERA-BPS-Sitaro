<?php

if (!isset ($_SESSION["Login"]) || $_SESSION ["Login"] != true){
	header ("Location: ../../index.php");
}
else if ($_SESSION["flag"] = 2 ){
	$_SESSION ["Login"] = true;
}
else{
	header ("Location: ../index.php");
}

?>
