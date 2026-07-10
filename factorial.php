<html> 
<head> 
<title>Assignment 6</title> 
</head> 
<body> 
<form method="POST"> 
<h3>Enter any Value to calculate its Factorial no.:<br><br> 
<input type="text" name="t1"><br><br> 
<input type="submit" name="" value="Show"></h3> 
</form> 
<?php 
if($_POST) 
{ 
$a=$_POST["t1"]; 
$fact=1; 
$i=1; 
echo "<h2>Number=".$a."<br>"; 
while($i<=$a) 
{ 
$fact=$fact*$i; 
$i++; 
} 
echo "Factorial=".$fact."<br></h2>"; 
} 
?> 
</body> 
</html>
