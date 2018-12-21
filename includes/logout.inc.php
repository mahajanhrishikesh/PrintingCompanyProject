<?php

if(isset ($_POST['submit2'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../homepage.php");
	exit();
}