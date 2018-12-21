<?php

if(isset($_POST['submit'])){
 	$conn = new mysqli("localhost", "root", "", "loginsystem");
	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	$pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
	$rpwd = mysqli_real_escape_string($conn,$_POST['rpwd']);
	$cno=mysqli_real_escape_string($conn,$_POST['cno']);

	//error handlers
	//check for empty fields
	if(empty($first) || empty($last) || empty($email) || empty($uid)|| empty($pwd) ||empty($address) || empty($pincode) || empty($cno))
	{
		header("Location: ../homepage.php?signup=empty");
		exit();
	} else {
		//check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last) ){
			header("Location: ../homepage.php?signup=invalid");
			exit();
		}else{
			//check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../homepage.php?signup=email");
				exit();
			}else{
				$sql="SELECT * FROM users WHERE user_uid='$uid'";
				$result=mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);
				
				if($resultcheck>0){
					header("Location: ../homepage.php?signup=usertaken");
					exit();
				}
				else{
					// Hashing the password
					$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
					//insert the user 
					$sql2 = "INSERT INTO users(user_first, user_last,user_uid, user_pwd, user_email,user_address,user_pincode,user_cno) VALUES(?,?,?,?,?,?,?,?);";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql2)){
						echo "SQL Error";
					}else{
						mysqli_stmt_bind_param($stmt,"ssssssss", $first,$last , $uid, $hashedPwd, $email,$address,$pincode,$cno);
						mysqli_stmt_execute($stmt);
					}
					header("Location: ../homepage.php?homepage=success");
					exit();
				}
			}
		}
	}
}else{
	header("Location: ../homepage.php");
	exit();
}


















