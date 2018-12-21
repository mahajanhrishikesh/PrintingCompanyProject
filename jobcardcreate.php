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
        <h2>JOB CARD CREATOR</h2>
        <div class="container-fluid">
        <div class="row">
        <div class="col-xs-2">
        <form action="includes/jcc.inc.php" method="POST">
            <div class="form-group">
            	<h4>NAME</h4>
            	<input type="text" class="form-control" name="length" placeholder="Enter Name">
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
                <label for="gsm">GSM</label>
                <input type="tel" class="form-control" name="gsm" 
                       placeholder="GSM">
            </div>
      <div class="form-group">
                <label for="noc">Number of Cards</label>
                <input type="tel" class="form-control" name="noc" 
                       placeholder="Quantity">
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