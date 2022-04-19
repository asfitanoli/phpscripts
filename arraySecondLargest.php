<?php
echo "Find second largest element in an array<br>";
echo "dataArr = array(0,23,56,44,33,77,88,88,7,22)<br><br>";

$dataArr = array(0,23,56,44,33,77,88,88,7,22);

// 1. Using Sort
function findSecondMaxUsingSort($arr) {
	sort($arr);
	$size = sizeof($arr);
	return $arr[$size-2];
}

echo "Using Sort: ";
echo findSecondMaxUsingSort($dataArr);
echo '<br>';

// 2. Transverse the Array.
function findSecondMaxUsingTrans(array $arr) {
	$max = -1;
	$secondMax = -1;
	
	foreach($arr as $no) {
		if($no > $max) {
			$secondMax = $max;
			$max = $no;
		}
		
		if($no > $secondMax && $no < $max) {
			$secondMax = $no;
		}
	}
	return $secondMax;
}

echo "Using Transverse: ";
echo findSecondMaxUsingTrans($dataArr);
?>