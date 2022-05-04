<!DOCTYPE>

<html>
	<head>
<title> Global Variables</title>
	</head>
	<body>
<?php

$MyNumber=456456; // Local Scope
function Addition(){
	global $MyNumber; //Global 
	$a=5;
	$b=2;
	$c=$a+$b;
echo "New GLobal Addition".($MyNumber+$c)."<br>";
	echo "Addition is {$c}<br>";	
}

Addition();
?>

	</body>
</html>
