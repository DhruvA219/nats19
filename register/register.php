<?php
include 'config.php';
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


//echo "Event reg cost: " . $total_cost_of_event_reg . ". And cost of travel: " . $total_cost_of_travel_reg;
$amount = $total_cost_of_event_reg+$total_cost_of_travel_reg;
$name = 'aryan chhebre';
$number = '9818616737' ;
$email = 'scoobydoobydoo93@gmail.com';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://'.$mode.'.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:$api_key",
                  "X-Auth-Token:$api_secret"));
$payload = Array(
    'purpose' => 'Indian Nationals 2019',
    'amount' => $amount,
    'phone' => $number,
    'buyer_name' => $name,
    'redirect_url' => $redirect_url,
    'send_email' => true,
    'webhook' => $webhook_url,
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch);


//print_r($response);


$data = json_decode($response, true);
if($data['success'] == 1){
    // for on page payment, use this.
   $payment_id = $data['payment_request']['id'];
   echo '<script>
        Instamojo.open("https://'.$mode.'.instamojo.com/@scoobydoobydoo93/'.$payment_id.'"); 
    </script>
    ';
   
       //and for redirect to payment page, use this and uncomment the header() below.

       //header('Location:'.$data['payment_request']['longurl'].'');
}else{
  print_r($data);
    echo '<div class="w3-panel w3-red w3-content">
  
  <p>Error Try Again Later!</p>
</div>';
}


?>
