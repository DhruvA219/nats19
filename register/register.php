<?php
//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$base_fee=300;
$current_time=time();
$basetime_1=1548959400;
$basetime_2=1551378600;
$basetime_3=1554057000;

if ($current_time>$basetime_1){
	if ($current_time<$basetime_2){
	$base_fee=350;
	}
	else{
	$base_fee=400;
	}

}

echo strtotime("1 February 2019");
?>
