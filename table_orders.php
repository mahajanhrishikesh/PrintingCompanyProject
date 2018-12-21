<?php 
$connection = mysqli_connect('localhost','root','','loginsystem');


$sql = "SELECT * FROM printing_request WHERE master_printer_job = 1 ";

$records = mysqli_query($connection,$sql);
?>

<HTML>

<HEAD>
<TITLE>
ORDERS
</TITLE>
<style>
h1{
    font-style: bold;
    font-family: "Times";
}
table {
    border-collapse: collapse;
    width: 100%;
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

<TABLE width == '300' border = '1' cellpaddin='2' cellspacing='2' rules = "all" frame = "border" bgcolor='white' align='center'>
<tr  bgcolor="yellow">
	<th>Order ID</th>
	<th>User ID</th>
	<th>Store ID</th>
	<th>Order Time</th>
	<th>Lamination</th>
	<th>Jobcard Type</th>
	<th>Length</th>
	<th>Width</th>
	<th>GSM</th>
	<th>Number of copies</th>
	<th>Cost</th>

<tr>
<?php
while($response = mysqli_fetch_assoc($records))
{
echo "<tr>";
	echo "<td>".$response['order_id']."</td>";
	echo "<td>".$response['user_id']."</td>";
	echo "<td>".$response['store_id']."</td>";
	echo "<td>".$response['order_time']."</td>";
	echo "<td>".$response['lamination']."</td>";
	echo "<td>".$response['jobcard_type']."</td>";
	echo "<td>".$response['length']."</td>";
	echo "<td>".$response['width']."</td>";
	echo "<td>".$response['gsm']."</td>";
	echo "<td>".$response['num_of_copies']."</td>";
	echo "<td>".$response['order_cost']."</td>";
echo "<tr>";
}
?>
</table>
</body>
</html>