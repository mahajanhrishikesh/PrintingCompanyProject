<?php
include_once 'globals.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
     background-color: #004d99;
    width: 30%;
  
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: white;
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
.tab button:hover {
    background-color: #e65c00;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #e65c00;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;


input:invalid {
  border: 2px dashed red;
}

input:valid {
  border: 2px solid black;
}


}
header {
    background-color: #ddd;
    padding: 10px;
    text-align: center;
    font-size: 35px;
    color: black;
}
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}
</style>
</head>
<body>

<header>
     <div id="background-image">
        <center><img src='log.png'></center>
      </div>
     </header>



<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'SignIn')" id="defaultOpen">SignIn</button>
</div>

<div id="SignIn" class="tabcontent">
  <html>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                <h1>Login</h1> 
                <p><font color="red">* Required Fields</font></p> 
                <form action="includes/login.inc.php" method="POST">
                <div class="form-group">
                    <input type="text" name="uid" placeholder="Username/Email" required>
                    <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span>
                 </div>
                 <div class="form-group">
                       <input type="password" name="pwd" placeholder="Password" required>
                       <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                   </form>
        </div>
    </div>
    </div>
    
    
    </body>
</html>
</div>

<div id="Registration" class="tabcontent">
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
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1">
                <h1>REGISTRATION FORM</h1>  
                <form action="includes/signup.inc.php" method="POST">
                    <p><font color="red">* Required Fields</font></p> 
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <div>
                            <input type="text" name="first" placeholder="Firstname" required>
                            <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span>
                    </div>
                    </div>
                     <div class="form-group">
                    <label for= "lastname">Last name</label>
                    <div>
                       <input type="text" name="last" placeholder="Lastname" required>
                       <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span>
                    </div>
                    </div>
                    <div class="form-group">
                         <label for="e-mail">E-mail</label>
  <div> <input type="text" name="email" placeholder="E-mail" required></div>
  <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span>
                   </div>
                    <div class="form-group">
                         <label for= "password">Password</label>
                         <div>
                        <input type="password" name="pwd" placeholder="Password" required>
                        <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span>
                        <div>
                    </div>
               <div class="form-group">
                         <label for= "password">Re-enter Password</label>
                       <div> <input type="password" name="rpwd" placeholder="Password" required><div>
                        <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span>
                    </div>
                    <div class="form-group">
                        <label for= "uid">Username</label>
                        <div><input type="text" name="uid" placeholder="Username" required></div>
                        <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span>
                    </div>
                    <div class="form-group">
                         <label for= "contactno.">Contact Number</label>
                       <div> <input type="tel" name="cno" class="form-control" placeholder="enter your contact no."required>
                       <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span></div>
                    </div>
                    <div class="control-group">
                    <label class="control-label">Address</label>
                    <div class="controls">
                        <div><input id="address-line1" name="address"  type="text" placeholder="address" class="form-control input-xlarge" required></div>
                        <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span>
                        <p class="help-block">Address</p>
                    </div>
                </div>
                    <div class="form-group">
                         <label for= "pincode">Pincode</label>
                       <div> <input type="tel" class="form-control" name="pincode" placeholder="enter pincode"required>
                       <span class="error"><font color="red">*</font> <?php  echo $GLOBALS['err'];?></span></div>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                   </form>
                  </div>
            </div>
        </div>
    </body>
</html>

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

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<footer>
  <h2>Footer</h2>
</footer>
</body>
</html> 
