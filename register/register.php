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

$count_of_events = 0;
foreach ($_POST['events'] as $key => $value) {
	if($value == 1) {
		$count_of_events++;
	}
}
if($count_of_events == 0) $base_fee = 0;

$total_cost_of_event_reg = $base_fee + 50*$count_of_events;
// echo $total_cost_of_events_reg;

$total_cost_of_travel_reg = 0;
foreach ($_POST['travel'] as $key => $value) {
        if($value <= 10 && $value >= 1) {
                $total_cost_of_travel_reg += $value*100;
        }
}


echo "Event reg cost: " . $total_cost_of_event_reg . ". And cost of travel: " . $total_cost_of_travel_reg;
?>
