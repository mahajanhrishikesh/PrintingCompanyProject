<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">       
    </head>
	<style>
	img{
		padding:12px;
	}
	</style>
<?php
$name="glosspaper";
$noc=60;
$length=100;
$breadth=100;
$imgname="log.";
$typename="png";
$dir='Master/'.$name.'_'.$noc.'_('.$length.'x'.$breadth.')';
$images=scandir($dir);
for($b=2;$b!=10;$b++){
if($images[$b]!=NULL){
echo '<img class="NO-CACHE" height="400" width="400" src=Master/'.$name.'_'.$noc.'_('.$length.'x'.$breadth.')/'.$images[$b].'>';
}
}
?>
<script>
    var nods = document.getElementsByClassName('NO-CACHE');
for (var i = 0; i < nods.length; i++)
{
    nods[i].attributes['src'].value += "?a=" + Math.random();
}
</script>
</html>