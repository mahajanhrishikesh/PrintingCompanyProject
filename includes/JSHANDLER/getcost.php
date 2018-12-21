
<?php
$q=strval($_GET['q']);
$r=intval($_GET['r']);

$conn= mysqli_connect('localhost','root','','loginsystem');

$sql="SELECT cost FROM job_card WHERE name='$q' AND gsm ='$r'";

$result = mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
//echo $row['cost'];
return $row['cost'];  


