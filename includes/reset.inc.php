<?php
if(isset($_POST['reset'])){
	$b=exec("python reset_call.py");
	if($b=="RESET SUCCESSFUL"){
		header("Location: ../dashboard.php?=reset_successful");
	}
	else{
		header("Location: ../dashboard.php?=reset_unsuccessful");

	}
}