<?php
 session_start();
 //if(isset($_SESSION['u_id']){
 if(isset($_POST['submitjca'])){


 	$conn = new mysqli("localhost", "root", "", "loginsystem");
	$orderid= 1;
	$cost=1;
	//$cost= mysqli_real_escape_string($conn,$_POST['costap']);
	//echo "<h1>ok</h1>";
	
	if(empty($orderid)|| empty($cost)){
		//echo "okif";
		exit();
	}else {
		$sql = "SELECT * FROM printing_request_pending WHERE order_id=$orderid ";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		//echo "okelse\n";
		if($resultcheck < 1){
			echo"lol\n";
			exit();
		}else{
			//echo "okelseelse\n";
			if($row = mysqli_fetch_assoc($result)){
				$width= $row['width'];
			//	echo $width;
				$length= $row['length'];
				//echo $length;
				$type= $row['jobcard_type'];
				//echo $type;
				$lam= $row['lamination'];
				//echo $lam;
				$user_id= $row['user_id'];
				//echo $user_id;
				
				$store_id= $row['store_id'];
				//echo $store_id;
				$noc=$row['num_of_copies'];
				//echo $noc;
				$gsm=$row['gsm'];
				//echo $gsm;
				
					if(empty($width)|| empty($length) || empty($user_id))
					{
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
					$a=exec("python final_call.py  $length $width $user_id $store_id $lam $type $gsm $noc");
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
			}
		}
	}
 
 else{
	 header("Location: ../dashboard.php?order=wrong");
		exit();
 }



/*<?php
 session_start();
 //if(isset($_SESSION['u_id']){
 if(isset($_POST['submitjca'])){
	 	
	$conn = new mysqli("localhost", "root", "", "loginsystem");
 	$orderap=mysqli_real_escape_string($conn,$_POST['ordap']);
	$costap=mysqli_real_escape_string($conn,$_POST['costap']);
	$sql="SELECT * FROM printing_request_pending WHERE order_id=$orderap";
	$records=mysqli_query($conn,$sql);
	$result=mysqli_num_rows($records);
	if($result<1)
	{
		echo"<alert>No such order exists!</alert>";
	}
	else
	{
		if($row=mysqli_fetch_assoc($result))
		{
			$width= $row['width'];
			$length= $row['length'];
			$type= $row['jobcard_type'];
			$lam= $row['lamination'];
			$user_id= $row['user_id'];
			$mpj=$row['master_printer_job'];
			$store_id= $row['store_id'];
			$noc=$row['num_of_copies'];
			$gsm=$row['gsm'];
		}
	}
	*/
	
	/*
	$width= $_POST['width'];
	$length= $_POST['length'];
	$type= $_POST['somename'];
	$lam= $_POST['lam'];
	$user_id= $_POST['userid'];
	$mpj=$_POST['mpj'];
	$store_id= $_POST['storeid'];
	$noc=$_POST['noc'];
	$gsm=$_POST['gsm'];
	*/

	/*if(empty($width)|| empty($length) || empty($user_id)){
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
}*/
	/*else{
		header("Location: ../dashboard.php?order=wrong");
		exit();
	}*/
//					}
//else{
//		header("Location: ../website_page.php?wrong");
//		exit();
//}