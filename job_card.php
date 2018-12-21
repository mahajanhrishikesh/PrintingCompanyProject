<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
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
        <form>
            <div class="form-group">
                <h4>SIZE</h4>
                <label for="length">length</label>
                <input type="tel" class="form-control" name="length" 
                       placeholder="enter length">
            </div>
             <div class="form-group">
                <label for="breath">size</label>
                <input type="tel" class="form-control" name="breath" 
                       placeholder="enter breath">
            </div>
            <div class="form-group">
                <label for="papertype">paper type</label>
                <select>
                    <option></option>
                    <option>map</option>
                    <option>card</option>
                    <option>art card</option>
                    <option>art paper</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lamination">lamination</label>
                <input type="radio" class="form-control" name="lamination">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
        </form>
            </div>
            </div>
            </div>
    </body>
