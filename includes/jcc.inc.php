<?php
session_start();
if(isset($_POST['submitjcc'])){
	
	$name=$_POST['name'];
	$length=$_POST['length'];
	$width=$_POST['width'];
	$gsm=$_POST['gsm'];
	$noc=$_POST['noc'];
	$cost=$_POST['cost'];
	//error handlers

	if(empty($name) || empty($length) || empty($width) || empty($gsm) || empty($noc) || empty($cost)){
		header("Location: ../dashboard.php?=allfieldsreq");
		exit();
	}
	else{
		if(!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[0-9]*$/",$length) || !preg_match("/^[0-9]*$/",$width) || !preg_match("/^[0-9]*$/",$gsm) || !preg_match("/^[0-9]*$/",$noc) || !preg_match("/^[0-9]*$/", $cost)){
			header("Location: ../dashboard.php?=invalidinput");
			exit();
		} 
		else{
			$b='';
			$b=  exec("python job_card_create.py  $name $length $width $gsm $noc $cost");
			#echo $a;
			if($b=='Unexpected error'){
				header('Location: ../dashboard.php?order=unsuccessful');
				exit();
			}else{
				if($b=='Created'){
						header('Location: ../dashboard.php?order=successful');
						exit();
				}
			}
		}
	}
}
else{
	header ("Location: ../dashboard.php");
}