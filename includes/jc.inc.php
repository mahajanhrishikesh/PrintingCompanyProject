<?php
 session_start();
 //if(isset($_SESSION['u_id']){
 if(isset($_POST['submitjc'])){
 	#$conn = new mysqli("localhost", "root", "", "loginsystem");
	$width= $_POST['width'];
	$length= $_POST['length'];
	$type= $_POST['somename'];
	$lam= $_POST['lam'];
	$user_id= $_POST['userid'];
	$mpj=$_POST['mpj'];
	$store_id= $_POST['storeid'];
	$noc=$_POST['noc'];
	$gsm=$_POST['gsm'];

	if(empty($width)|| empty($length) || empty($user_id)){
		header ("Location: ../dashboard.php?order=empty");
		exit();
	}else{
		if($length>500 && $width>500){
			header ("Location: ../dashboard.php?order=no_fit");
			exit();

	}else{
		if((!preg_match("/^[0-9]*$/", $width))||(!preg_match("/^[0-9]*$/", $length))||(!preg_match("/^[0-9]*$/", $user_id))||(!preg_match("/^[0-9]*$/", $noc))||(!preg_match("/^[0-9]*$/", $gsm))) {
			header("Location: ../dashboard.php?order=invalid");
			exit();
		}
		else{
			$a='';
			$a=  exec("python final_call.py  $length $width $user_id $store_id $lam $type $gsm $noc");
			#echo $a;
			if($a=='Order unsuccessful'){
				header('Location: ../dashboard.php?order=unsuccessful');
				exit();
			}else{
				if($a=='An unexpected error has occured'){
						header('Location: ../dashboard.php?order=serviceunavailable');
						exit();
				}else{
					
						if($a=='Order successful'){
					header('Location: ../dashboard.php?order=successful');
					exit();
					}
				}
			}
		}
	}
	}
}
	else{
		header("Location: ../dashboard.php?order=wrong");
		exit();
	}
//					}
//else{
//		header("Location: ../website_page.php?wrong");
//		exit();
//}