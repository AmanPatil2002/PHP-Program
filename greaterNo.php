<html> 
<head> 
<title>Assignment 3</title> 
</head> 
<body> 
<form method="POST"> 
<h3>Enter Three Numbers to check Greater No. among them:<br><br> 
<input type="text" name="t1"><br><br> 
<input type="text" name="t2"><br><br> 
<input type="text" name="t3"><br><br> 
<input type="submit" name="" value="Show"></h3> 
</form> 
<?php 
if($_POST) 
{ 
$a=$_POST["t1"]; 
$b=$_POST["t2"]; 
$c=$_POST["t3"]; 
echo "<h2>"; 
echo"Val 1 : ".$a."<br><br>"; 
echo"Val 2 : ".$b."<br><br>"; 
echo"Val 3 : ".$c."<br><br>"; 
if($a>$b) 
{ 
if ($a>$c) 
{ 
echo "Greater Number is :".$a."<br>"; 
} 
else 
{ 
echo"Greater Number is :".$c."<br>"; 
} 
} 
else if ($b>$a) 
{ 
if ($b>$c) 
{ 
echo "Greater Number is :".$b."<br>"; 
} 
else 
{ 
echo"Greater Number is :".$c."<br>"; 
} 
} 
echo"</h2>"; 
} 
?> 
</body> 
</html>
