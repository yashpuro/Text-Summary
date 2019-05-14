<?php  
$result = $_POST["TS"];
$result1 = $_POST["AS"];
$result2 = $_POST["AT"];


if(isset($result))
{
	header("Location:TS.html");
}

elseif (isset($result1)) 
{
	header("Location:AS.html");	
}
elseif (isset($result2)) 
{
	header("Location:AT.html");	
}
//background-image: url(back.jpg);
?>