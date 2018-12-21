<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #004d99;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #e65c00;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #e65c00;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    background-color:#f5f5f0;
}
* {
    box-sizing: border-box;
}



/* Style the header */
header {
    background-color: #004d99;
    padding: 5px;
    text-align: center;
    font-size: 35px;
    color: black;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
    height:300px;
}

/* Style the footer */
footer {
    background-color: #004d99;
    padding: 10px;
    text-align: center;
    color: white;
}
#txt{
   background-color: #004d99;
   color:white;
}
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
</style>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>
<body onload="startTime()">
  <div id="txt"></div>
  <header>
  <center>
        <div id="background-image">
        <center><img src="log.png"></center>
        </div>
  </center>
  </header>
<section>
	<div class="tab">
	<button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">Home</button>
	<button class="tablinks" onclick="openCity(event, 'Jobcard')">Jobcard Orders</button>
	<button class="tablinks" onclick="openCity(event, 'Chatroom')">Chatroom</button>
	<button class="tablinks" onclick="openCity(event, 'Images')">Current State</button>
	<?php
	if($_SESSION['u_first']=="admin")
	{
		echo '<button class="tablinks" onclick="openCity(event, \'add_user\')">Add User</button>
		<button class="tablinks" onclick="openCity(event,\'jcc\')">Create Jobcard</button>';
	}
	?>
	</div>
	<div id="add_user" class="tabcontent">
	<?php
	include 'registration_form.php';
	?>
	</div>

	<div id="jcc" class="tabcontent">
	<html>
	<head>
	<style>
	div
	{
		padding: 10px;
	}
	</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!--jQuery library--> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!--Latest compiled and minified JavaScript--> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">       
	</head>
	<body>
        <h2>JOB CARD CREATOR</h2>
        <div class="container-fluid">
        <div class="row">
        <div class="col-xs-2">
        <form action="includes/jcc.inc.php" method="POST">
            <div class="form-group">
              <h6>NAME</h6>
              <input type="text" class="form-control" name="name" placeholder="Enter Name">
              <h6>SIZE</h6>
              <label for="len">Length</label>
              <input type="tel" class="form-control" name="length" placeholder="Enter length">
			</div>
             <div class="form-group">
              <label for="wid">Width</label>
              <input type="tel" class="form-control" name="width" placeholder="Enter width">
              </div>
			<div class="form-group">
					<label for="gsm">GSM</label>
					<input type="tel" class="form-control" name="gsm" placeholder="GSM">
			</div>
            
			<div class="form-group">
                <label for="noc">Number of Cards</label>
                <input type="tel" class="form-control" name="noc"  placeholder="Quantity">
            </div> 
            
			<div class="form-group">
                <label for="cost">Cost per m<sup>2</sup></label>
                <input type="tel" class="form-control" name="cost"  placeholder="Cost">
            </div>              
        
		<div>
        <br>
        <button type="submit" name="submitjcc">Create Cards</button>
        </div>
        </form>
            </div>
            </div>
            </div>
    </body>
</html>
</div>

<div id="Home" class="tabcontent">

  <div>

<?php
    echo '<h2>Hello '.$_SESSION['u_first'].', welcome Back!</h2>';
    if($_SESSION['u_first']=="admin"): ?>
<section>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab2 {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab2 button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab2 button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab2 button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent2 {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 700px;
}
</style>
</head>
<body>
<div class="tab2">
  <button class="tablinks2" onclick="openC(event, 'pend_order')">Pending Orders</button>
  <button class="tablinks2" onclick="openC(event, 'm_printt')">Master Printer Orders</button>
  <button class="tablinks2" onclick="openC(event, 'm_jcc')">Job Cards Table</button>
  <button class="tablinks2" onclick="openC(event, 'London')" >Reset Cards</button>
  <button class="tablinks2" onclick="openC(event, 'Paris')">Remove Card</button>
  <button class="tablinks2" onclick="openC(event, 'Tokyo')">Update Card</button>
  <button class="tablinks2" onclick="openC(event, 'logout')">Account</button>
</div>

<div id="pend_order" class="tabcontent2">
<?php
	include'pending_orders.php';
?>
</div>

<div id="logout" class="tabcontent2">
  <h3>Logout?</h3>
      <form action="includes/logout.inc.php" method="POST">  <button type="submit" name="submit2">Logout</button></form>
</div>

<div id="m_printt" class="tabcontent2">

  <?php
    include 'table_orders.php';
  ?>
</div>

<div id="m_jcc" class="tabcontent2">

 <?php
include 'table_jobcard.php';
?>
</div>

<div id="London" class="tabcontent2">
  <h3>This action would clear all current cards, are you sure?</h3>
  <form action="includes/reset.inc.php" method="POST">  <button type="submit" name="reset">Reset Cards</button></form>
</div>

<div id="Paris" class="tabcontent2">
  <h3>Which card do you want to remove?</h3>
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
<br>
   <form action="includes/remove.inc.php" method="POST">  <button type="submit" name="remove">Remove Card</button></form>
</div>

<div id="Tokyo" class="tabcontent2">
  <h3>Which Card do you want to update?</h3>
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
  <form action="includes/update.inc.php" method="POST">  <button type="submit" name="update">Update Card</button></form>
</div>

<script>
function openC(evt, cityName) {
    var i2, tabcontent2, tablinks2;
    tabcontent2 = document.getElementsByClassName("tabcontent2");
    for (i2 = 0; i2 < tabcontent2.length; i2++) {
        tabcontent2[i2].style.display = "none";
    }
    tablinks2 = document.getElementsByClassName("tablinks2");
    for (i2 = 0; i2 < tablinks2.length; i2++) {
        tablinks2[i2].className = tablinks2[i2].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</section>
    
<?php    else: ?>
      <form action="includes/logout.inc.php" method="POST">  <button type="submit" name="submit2">Logout</button></form>';
    
<?php endif; ?>
</div>


</div>

<div id="Images" class="tabcontent">
<style>
nav{
  align:right;
}
</style>
<nav>
<?php
include 'table_jobcard_refer.php';
?>
</nav>
<form target="_blank" action="includes/new.php" method="POST">
<h1>Show Specific JobCard</h1>
<h4>Types</h4>
<?php
  $connection = mysqli_connect('localhost','root','','loginsystem');
$query = "SELECT name FROM job_card" ;
$result = mysqli_query($connection,$query);
echo'<select name="somename" multiple="multiple">';
while($row = mysqli_fetch_assoc( $result )) { 
        echo '<option value="'.$row['name'].'">' . $row['name'] . '</option>';   
}
echo '</select>';
?>
<div>
<h4>GSM</h4>
<input type="tel" id="gsm" name="gsm" placeholder="GSM" required>
</div>

<br>
<div>
<button type="submit" name="Gimages">Get Images</button>
</div>
</form>
</div>

<div id="Jobcard" class="tabcontent">
 <html>
 <style>
 nav {
    float: right;
    
}
div {
  padding: 10px;
}

</style>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forms in Bootstrap</title>
    </head>
    <body>
        <h2>JOB CARD SHOWCASE</h2>
        <nav>
          <h2>Quotation</h2>
<input id='first' type="text" class="form-control formBlock" name="bus_ticket"  placeholder="Length" required/><br />
<input id='second' type="text" class="form-control formBlock" name="plane_ticket"  placeholder="Breadth" required/><br />
<h6>Type</h6>
<?php
  $connection = mysqli_connect('localhost','root','','loginsystem');
$query = "SELECT name FROM job_card" ;
$result = mysqli_query($connection,$query);
echo'<select class="country" multiple="multiple" id="fifth">';
while($row = mysqli_fetch_assoc( $result )) { 
        echo '<option value="'.$row['cost'].'">' . $row['name'] . '</option>';   
}
echo '</select>';
?>

<h6>Laminate?</h6>
<select class="country" multiple="multiple" id="sixth">
            <option value="0">No</option>
            <option value="23">Yes</option>
</select>
<input id='fourth' type="text" class="form-control formBlock" name="eating_expenses"  placeholder="number of Cards" required/><br />
<br /><br />
<h3>Total ₹: <span id="total_expenses1"></span></h3>
<br />
<br /><br />
<script>
$('input').keyup(function(){ // run anytime the value changes
    var firstValue  = Number($('#first').val());   // get value of field
    var secondValue = Number($('#second').val()); // convert it to a float
    var thirdValue  = Number($('#third').val());
    var fourthValue = Number($('#fourth').val());
    var fifthValue = Number($('#fifth').val());
    var sixthValue = Number($('#sixth').val());
    $('#total_expenses1').html((((firstValue * secondValue) * fifthValue) * fourthValue)+(sixthValue*firstValue*secondValue)); 
});
 </script>
        </nav>
        <div class="container-fluid">
        <div class="row">
        <div class="col-xs-2">
        <form action="includes/jc.inc.php" id="jcform" method="POST">
            <div class="form-group">
              <fieldset>
                <h4>SIZE</h4>
                
                <div>
                  <label for="len">Length</label>
                <input type="tel" id="firstValue" class="form-control" name="length" 
                       placeholder="Enter length" >
                </div>
                <div>
                <label for="wid">Width</label>
                <input type="tel" id="secondValue" class="form-control" name="width" placeholder="Enter width" >
                </div>
                <div>
                <label for="User_id">User ID</label>
                <input type="tel" class="form-control" name="userid" placeholder="Enter User ID">
              </div>
              <div>
                <label for="Store_id">Store ID</label>
                <input type="tel" class="form-control" name="storeid" placeholder="Enter Store ID">
          </div>
          <div>
                <label for="No. of Cards">Number of Orders</label>
                <input type="tel" id="fourthValue" class="form-control" name="noc" placeholder="Enter Number of cards">
            </div>
            <div>
                <label for="GSM">GSM</label>
                <input type="tel" class="form-control" name="gsm"  placeholder="Enter GSM">
          </div>
          <div>
                <label for="type">paper type</label>
                <?php
				$connection = mysqli_connect('localhost','root','','loginsystem');
				$query = "SELECT name FROM job_card" ;
				$result = mysqli_query($connection,$query);
				echo'<select name="somename" multiple="multiple">';
				while($row = mysqli_fetch_assoc( $result )) { 
				echo '<option value="'.$row['name'].'">' . $row['name'] . '</option>';   
				}
				echo '</select>';
				?>
           </div>
           <div>
                <label for="type">Forward to Master Printer?</label>
                <select name="mpj">
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                   </select>
                 </div>
            <br>
            <div>
                <label for="lam">Laminate?</label>
                <select name="lam" id="sixthValue" >
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                   </select>
                 </div>
            </div>
        <div>
          <br>
                 <button type="submit" name="submitjc">Place Order</button>

        
        </fieldset>
        </div>
        </form>
        
</select>

        
            </div>
            </div>
            </div>
    </body>


</div>

<div id="Chatroom" class="tabcontent">
 <html>

<head>
<title>ChatBox</title>
<style>
#signInForm, #messageForm {
  margin:0px;
  margin-bottom:1px;
}
#userName {
  width: 150px;
  height: 22px;
  border: 1px teal solid;
  float:left;
}
#signInButt {
  width: 60px;
  height: 22px;
} 
#signInName{
  font-family:Tahoma;
  font-size:12px;
  color:orange;
}
#chatBox {
  font-family:tahoma;
  font-size:12px;
  color:black;
  border: 1px teal solid;
  height: 225px;
  width: 400px;
  overflow: scroll;
  float:left;

}
#usersOnLine{
  font-family:tahoma;
  font-size:14;
  color:orange;
  border:1px teal solid;
  width:150px;
  height:225px;
  overflow:scroll;
  margin-left:1px;
}
#message {
  width: 350px;
  height: 22px;
  border: 1px teal solid;
  float:left;
  margin-top:1px;
}
#send {
  width: 50px;
  height: 22px;
  float:left;
  margin:1px;
}
#serverRes{
  width:150px;
  height:22px;
  border: 1px teal solid;
  float:left;
  margin:1px;
}
</style>
<script>
function Ajax_Send(GP,URL,PARAMETERS,RESPONSEFUNCTION){
var xmlhttp
try{xmlhttp=new ActiveXObject("Msxml2.XMLHTTP")}
catch(e){
try{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")}
catch(e){
try{xmlhttp=new XMLHttpRequest()}
catch(e){
alert("Your Browser Does Not Support AJAX")}}}

err=""
if (GP==undefined) err="GP "
if (URL==undefined) err +="URL "
if (PARAMETERS==undefined) err+="PARAMETERS"
if (err!=""){alert("Missing Identifier(s) "+err);return false;}

xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState == 4){
if (RESPONSEFUNCTION=="") return false;
eval(RESPONSEFUNCTION(xmlhttp.responseText))
}
}

if (GP=="GET"){
URL+="?"+PARAMETERS
xmlhttp.open("GET",URL,true)
xmlhttp.send(null)
}

if (GP="POST"){
PARAMETERS=encodeURI(PARAMETERS)
xmlhttp.open("POST",URL,true)
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
xmlhttp.setRequestHeader("Content-length",PARAMETERS.length)
xmlhttp.setRequestHeader("Connection", "close")
xmlhttp.send(PARAMETERS)
}
}
</script>
<script>
lastReceived=0;

// Hide the message form
function hideShow(hs){
if(hs=="hide"){
signInForm.signInButt.value="Sign in"
signInForm.signInButt.name="signIn"
messageForm.style.display="none"
signInForm.userName.style.display="block"
signInName.innerHTML=""
}
if(hs=="show"){
signInForm.signInButt.value="Sign out"
signInForm.signInButt.name="signOut"
messageForm.style.display="block"
signInForm.userName.style.display="none"
signInName.innerHTML=signInForm.userName.value 
}
}


// Sign in and Out
function signInOut(){
if (signInForm.userName.value=="" || signInForm.userName.value.indexOf(" ")>-1){
alert("Not valid user name Please make sure your user name didn't contains a space Or it's not empty.");
signInForm.userName.focus();
return false;
}

// Sign in
if (signInForm.signInButt.name=="signIn"){
data="user=" + signInForm.userName.value +"&oper=signin"
Ajax_Send("POST","chatboxinc/users.php",data,checkSignIn);
return false
}

// Sign out
if (signInForm.signInButt.name=="signOut"){
data="user=" + signInForm.userName.value +"&oper=signout"
Ajax_Send("POST","chatboxinc/users.php",data,checkSignOut);
return false
}
}

// Sign in response
function checkSignIn(res){
if(res=="userexist"){
alert("The user name you typed is already exist Please try another one");
return false;
}
if(res=="signin"){
hideShow("show")

messageForm.message.focus()
updateInterval=setInterval("updateInfo()",3000);
serverRes.innerHTML="Sign in"
}
}

// Sign out response
function checkSignOut(res){
if(res=="usernotfound"){
serverRes.innerHTML="Sign out error";
res="signout"
}
if(res=="signout"){
hideShow("hide")
signInForm.userName.focus()
clearInterval(updateInterval)
serverRes.innerHTML="Sign out"
return false
}
}

// Update info
function updateInfo(){
serverRes.innerHTML="Updating"
Ajax_Send("POST","chatboxinc/users.php","",showUsers)
Ajax_Send("POST","chatboxinc/receive.php","lastreceived="+lastReceived,showMessages)
}

// update online users
function showUsers(res){
usersOnLine.innerHTML=res
}

// Update messages view
function showMessages(res){
serverRes.innerHTML=""
msgTmArr=res.split("<SRVTM>")
lastReceived=msgTmArr[1]
messages=document.createElement("span")
messages.innerHTML=msgTmArr[0]
chatBox.appendChild(messages)
chatBox.scrollTop=chatBox.scrollHeight
}

// Send message
function sendMessage(){
data="message="+messageForm.message.value+"&user="+signInForm.userName.value
serverRes.innerHTML="Sending"
Ajax_Send("POST","chatboxinc/send.php",data,sentOk)
}

// Sent Ok
function sentOk(res){
if(res=="sentok"){
messageForm.message.value=""
messageForm.message.focus()
serverRes.innerHTML="Sent"
}
else{
serverRes.innerHTML="Not sent"
}
}
</script>
</head>

<body onbeforeunload="signInForm.signInButt.name='signOut';signInOut()" onload="hideShow('hide')">

<h1> Chat Box</h1>
<form onsubmit="signInOut();return false" id="signInForm">
  <input id="userName" type="text">
  <input id="signInButt" name="signIn" type="submit" value="Sign in">
  <span id="signInName">User name</span>
  </form>

  <div id="chatBox"></div>
  <div id="usersOnLine"></div>
  <form onsubmit="sendMessage();return false" id="messageForm">
  <input id="message" type="text">
  <input id="send" type="submit" value="Send">
  <div id="serverRes"></div></form>

</body>
</html>

</div>
<div id="Logout" class="tabcontent">
<form action="includes/logout.inc.php" method="POST">
  <button type="submit" name="submit">Logout</button>
</form>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

}
</script> 

</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

    
}
</script>
</section>
<footer>
  <h6>Contact Admin for any doubts</h6>
</footer>
</html>