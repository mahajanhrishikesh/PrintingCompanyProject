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
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
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
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
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
<?php
if(isset($_SESSION['u_id'])):{
?>
<body onload="startTime()">
  <div id="txt"></div>
<center>
     <div id="background-image">
        <h1>SJSAP</h1>
      </div>
     </center>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">Home</button>
  <button class="tablinks" onclick="openCity(event, 'Jobcard')">Jobcard</button>
  <button class="tablinks" onclick="openCity(event, 'Chatroom')">Chatroom</button>
  <button class="tablinks" onclick="openCity(event, 'Images')">Current State</button>
</div>

<div id="Home" class="tabcontent">

  <div>
<?php
    echo "Hello ".$_SESSION[u_first].", welcome Back!";
?>  
  <form action="includes/logout.inc.php" method="POST">  <button type="submit" name="submit2">Logout</button></form>
  </div>

</div>

<div id="Images" class="tabcontent">
  <html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">       
    </head>
    <body>
    <br>
    <br>
        <div>
        <h3 align= 'center'>MAP</h3>
        <center><img class="NO-CACHE" src="includes/Master1/map.jpg" alt="map" id="image" ></center>
    </div>
        <div>
        <br>
        <h3 align= 'center'>CARD</h3>
        <center><img class="NO-CACHE" src="includes/Master1/card.jpg" alt="card" id="image" ></center>
        </div>
        <div>
        <br>
         <h3 align= 'center'>ART CARD</h3>
         <center><img class="NO-CACHE" src="includes/Master1/art_card.jpg" alt="art card" id="image" ></center>
         </div>
        <div>
        <br>
          <h3 align= 'center'>ART PAPER</h3>
          <center><img class="NO-CACHE" src="includes/Master1/art_paper.jpg" alt="art paper" id="image" ></center>
          </div>
    </body>
    <script>
    var nods = document.getElementsByClassName('NO-CACHE');
for (var i = 0; i < nods.length; i++)
{
    nods[i].attributes['src'].value += "?a=" + Math.random();
}
</script>
</html>
</div>

<div id="Jobcard" class="tabcontent">
 <html>
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
        <div class="container-fluid">
        <div class="row">
        <div class="col-xs-2">
        <form action="includes/jc.inc.php" method="POST">
            <div class="form-group">
                <h4>SIZE</h4>
                <label for="len">Length</label>
                <input type="tel" class="form-control" name="length" 
                       placeholder="Enter length">
            </div>
             <div class="form-group">
                <label for="wid">Width</label>
                <input type="tel" class="form-control" name="width" 
                       placeholder="Enter width">
            </div>
      <div class="form-group">
                <label for="User_id">User ID</label>
                <input type="tel" class="form-control" name="userid" 
                       placeholder="Enter User ID">
            </div>
      <div class="form-group">
                <label for="Store_id">Store ID</label>
                <input type="tel" class="form-control" name="storeid" 
                       placeholder="Enter Store ID">
            </div>
            <div class="form-group">
                <label for="type">paper type</label>
                <select name="type">
                    <option>-</option>
                    <option value="map">map</option>
                    <option value="card">card</option>
                    <option value="art_card">art_card</option>
                    <option value="art_paper">art_paper</option>
                </select>
            </div>
            <div class="form-group">
                <label for="type">Forward to Master Printer?</label>
                <select name="mpj">
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                   </select>
            </div>
           <div class="form-group">
                <label for="lam">Laminate?</label>
                <select name="lam">
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                   </select>
            </div>
            <div>
            <input type="file" name="pic" accept="image/*">
            </div>
        <div>
          <br>
        <button type="submit" name="submitjc">Place Order</button>
        </div>
        </form>
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
<?php 
   }
   ?>
<?php
else:{
header("Location: homepage.php?Login");
            exit();
}

?>
</body>
</html> 
