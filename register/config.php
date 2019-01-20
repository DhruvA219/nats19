<?php
	 $email = 'scoobydoobydoo93@gmail.com'; //To Sent to a notify email whenever a user complete a payment.
     // $api_key = 'test_e2c058fcafe5220cdea6b343add';
     // $api_secret = 'test_28007839e20492051409a71b705';
     // $api_salt = '959c9dce01d443b1bc1aa535406dc8b7';
    $api_key="12953d0b70665d3978763d7732335d1c";
    $api_secret="f610d7f9035e5877c917e777dcb604c3";
    $api_salt="6e7b15e9689d4a62af240dc2322fd568";
	$webhook_url = 'https://nats19.in/register/webhook.php';
	$redirect_url = 'https://nats19.in/register/thanks.php';
    $mode = "live"; //You can change it to live by jest replacing it by 'live'
    if($mode == 'live'){
        $mode = 'www';
    }else{
        $mode = 'test';
    }
    
?>
