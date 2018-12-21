<?php 
$connection = mysqli_connect('localhost','root','','loginsystem');


$sql = "SELECT * FROM job_card";

$records = mysqli_query($connection,$sql);
?>

<HTML>

<HEAD>
<TITLE>
JOB-CARDS
</TITLE>
<style>
h1{
    font-style: bold;
    font-family: "Times";
}
table {
    border-collapse: collapse;
    width: 50%;
}

td {
    font-family: "Times new roman";
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd){background-color:#f2f2f2}

th {
    font-family: "Times new roman";
    font-style: oblique;
    text-align: left;
    padding: 12px;
    background-color: #658EDF;
    color: white;
}
</style>
</HEAD>

<BODY bgcolor='white'>

<TABLE width == '600' broder = '1' cellpaddin='2' cellspacing='2' rules = "all" frame = "border" bgcolor='white' align='center'>
<tr  bgcolor="yellow">
	<th>ID</th>
	<th>Job-Card</th>
	<th>GSM</th>
<tr>
<?php
while($response = mysqli_fetch_assoc($records))
{
echo "<tr>";
	echo "<td>".$response['card_id']."</td>";
	echo "<td>".$response['name']."</td>";
	echo "<td>".$response['gsm']."</td>";
echo "<tr>";
}
?>
</table>
</body>
</html>