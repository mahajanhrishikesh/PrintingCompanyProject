<html>
<body>
<form id="jcform">
<?php
$connection = mysqli_connect('localhost','root','','loginsystem');
$query = "SELECT name FROM job_card" ;
$result = mysqli_query($connection,$query);
echo'<select name="somename">';
while($row = mysqli_fetch_assoc( $result )) { 
        echo '<option value="'.$row['name'].'">' . $row['name'] . '</option>';   
}
echo '</select>';
?>

<input type="tel" name="gsm" placeholder="GSM">
<button type="button" onclick="getcostcard()">Cost</button>
<span id="answer">

</span>

</form>
<script type="text/javascript">
function getcostcard(){

	var mysql = require('mysql');
	var costcard=0;
	var theform= document.forms["jcform"];
	var d= theform.elements["somename"].value;
	var e= Number(theform.elements["gsm"].value);
	var con = mysql.createConnection({
	  host: "localhost",
	  user: "yourusername",
	  password: "yourpassword",
	  database: "loginsystem"
	});

	var sql = 'SELECT cost FROM customers WHERE name = ? AND gsm = ?';
con.query(sql, [d, e], function (err, result) {
  if (err) throw err;
  console.log(result);
  costcard=result;
});
	document.getElementById("answer").value=costcard;
}
</script>
</body>
</html>
