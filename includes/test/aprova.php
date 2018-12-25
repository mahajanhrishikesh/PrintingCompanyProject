<html>
<?php


$submit=1;

 	$conn = new mysqli("localhost", "root", "", "loginsystem");
	$orderid= 1;
	$cost=1;
	//$cost= mysqli_real_escape_string($conn,$_POST['costap']);
	echo "<h1>ok</h1>";
	
	if(empty($orderid)|| empty($cost)){
		echo "okif";
		exit();
	}else {
		$sql = "SELECT * FROM printing_request_pending WHERE order_id=$orderid ";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		echo "okelse\n";
		if($resultcheck < 1){
			echo"lol\n";
			exit();
		}else{
			echo "okelseelse\n";
			if($row = mysqli_fetch_assoc($result)){
				$width= $row['width'];
				echo $width;
				$length= $row['length'];
				echo $length;
				$type= $row['jobcard_type'];
				echo $type;
				$lam= $row['lamination'];
				echo $lam;
				$user_id= $row['user_id'];
				echo $user_id;
				
				$store_id= $row['store_id'];
				echo $store_id;
				$noc=$row['num_of_copies'];
				echo $noc;
				$gsm=$row['gsm'];
				echo $gsm;
			}
		}
	}
?>
</html>