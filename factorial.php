<?php
echo "Find Factorial of a number 5?<br>";
$num = 5;

function factorial($number) {
	
	if($number <= 1) {
		return 1;
	} else {
		return $number * factorial($number - 1);
	}

}

echo factorial($num);
?>