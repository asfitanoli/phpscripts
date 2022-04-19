<?php
echo "Print table of number 8<br>";
$num = 8;

function printTable($number) {
	
	for($i=1; $i<=10; $i++) {
		
		echo $i * $number;
		echo '<br>';
	}

}

echo printTable($num);

?>