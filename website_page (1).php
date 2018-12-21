<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        /* Set height of body and the document to 100% to enable "full page tabs" */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
  color:#FFFFFF;
}
body{
    background-color: #00629E;
}

/* Style tab links */
.tablink {
  background-color:#619BD0;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: red;}
#Chatbox {background-color: green;}
#JobCard {background-color: blue;}
#Image {background-color: orange;}
h1{
            background-color:#5ECECF;
        }
</style>
<body>
    <center>
     <div id="background-image">
        <h1>SJSAP</h1>
     </center>
<button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
<button class="tablink" onclick="openPage('Chatbox', this, 'green')" id="defaultOpen">ChatBox</button>
<button class="tablink" onclick="openPage('JobCard', this, 'blue')">JobCard</button>
<button class="tablink" onclick="openPage('Image', this, 'orange')">Image</button>

<div id="Home" class="tabcontent">
</div>

<div id="Chatbox" class="tabcontent">
</div>

<div id="JobCard" class="tabcontent">
</div>

<div id="Image" class="tabcontent">
</div>
</body>
</html>
