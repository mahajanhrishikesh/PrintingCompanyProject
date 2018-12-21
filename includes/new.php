<?php
if(isset($_POST['Gimages']))
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">       
    </head>
	<style>
	img{
		padding:30px;
	}
	header {
    background-color: #004d99;
    padding: 5px;
    text-align: center;
    font-size: 35px;
    color: black;
}

	</style>
	<header>
	<center>
        <div id="background-image">
        <center><img src="../log.png"></center>
        </div>
 </center>
	</header>
<?php
$name=$_POST['somename'];
$gsm=$_POST['gsm'];
$connection = mysqli_connect('localhost','root','','loginsystem');
$query = "SELECT length,width FROM job_card WHERE name='".$name."'AND gsm=".$gsm ;
$result = mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
$length=$row['length'];
$breadth=$row['width'];
$dir='Master/'.$name.'_'.$gsm.'_('.$length.'x'.$breadth.')';
$images=scandir($dir);
for($b=2;$b!=sizeof($images);$b++){
if($images[$b]!=NULL){
echo '<img class="NO-CACHE" height="400" width="400" src=Master/'.$name.'_'.$gsm.'_('.$length.'x'.$breadth.')/'.$images[$b].'>';
}
}
?>
<script>
    var nods = document.getElementsByClassName('NO-CACHE');
for (var i = 0; i < nods.length; i++)
{
    nods[i].attributes['src'].value += "?a=" + Math.random();
}
</script>
</html>