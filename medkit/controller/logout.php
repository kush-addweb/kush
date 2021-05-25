<?php
session_start();
if(session_destroy()) {
	$referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");
 }
// session_destroy();
// header("location: ../index.php");
?>