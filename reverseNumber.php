<?php
echo "Reverse a number 1187<br>";
$num = 1187;

function reverseNum($number) {
	
	$no = (string)$number;
	
	$revStr = strrev($no);
	
	return (int)$revStr;
}

echo reverseNum($num);
?>