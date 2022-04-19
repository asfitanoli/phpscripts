<?php
echo "Generate Fibbonaaci Series for number 10?<br>";
$num = 10;

function fibo($number) {
	$num1 = $count = 0;
	$num2 = 1;
	
	while ($count < $number) {
		echo $num1 . '<br>';
		$num3 = $num1 + $num2;
		$num1 = $num2;
		$num2 = $num3;
		$count += 1;
	}
}

echo fibo($num);
?>