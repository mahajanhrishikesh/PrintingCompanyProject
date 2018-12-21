<html>
<head></head>
<body>
	<form id="itt">
Length:<input type="tel" id="1a" name="1a">
<br>
Width:<input type="tel" id="1b" name="1b">	
<?php
  $connection = mysqli_connect('localhost','root','','loginsystem');
$query = "SELECT name FROM job_card" ;
$result = mysqli_query($connection,$query);
echo'<br>Card Type:<select name="somename" >';
while($row = mysqli_fetch_assoc( $result )) { 
        echo '<option value="'.$row['name'].'">' . $row['name'] . '</option>';   
}
echo '</select>';
?>
<br>
<input type="tel" id="gsm">
<br>
<button type="button" onclick="add()">ADD</button>
<br>
Quotation:<span id="1c"></span>
CostCard: <span id="1d"></span>
</form>
</body>

<script>
	function add() {
		var c= 0;
		var theform= document.forms["itt"];
		var a=Number(theform.elements["1a"].value);
		var b=Number(theform.elements["1b"].value);
		var d=Number(theform.elements["somename"].value);
		var e= Number(theform.elements["gsm"].value);
		var c= a*b*getcostcard();
		document.getElementById("1c").innerHTML=c;
	}
	function getcostcard(){
	var costcard=0;

	if(type="" && gsm=0){
		var theform= document.forms["itt"];
		var d=Number(theform.elements["somename"].value);
		var e= Number(theform.elements["gsm"].value);
		costcard=0;
		return 0;
	}else{
		if(window.XMLHttpRequest){
			xmlhttp= new XMLHttpRequest();
		}else{
			xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange= function(){
			if(this.readyState==4 && this.status==200){
				document.getElementById("1d").innerHTML=this.r
			}
		};
		xmlhttp.open("GET","getcost.php?q="+type+"&r="+gsm,true);
		xmlhttp.send();
	}
	return costcard;
}
</script>

</html>