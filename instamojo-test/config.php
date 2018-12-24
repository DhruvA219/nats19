<?php
	$email = 'scoobydoobydoo93@gmail.com'; //To Sent to a notify email whenever a user complete a payment.
    $api_key = 'test_e2c058fcafe5220cdea6b343add';
    $api_secret = 'test_28007839e20492051409a71b705';
    $api_salt = '959c9dce01d443b1bc1aa535406dc8b7';
	$webhook_url = 'https://akashrupela.com/instamojo-test/webhook.php';
	$redirect_url = 'https://akashrupela.com/instamojo-test/thanks.php';
    $mode = "test"; //You can change it to live by jest replacing it by 'live'
    if($mode == 'live'){
        $mode = 'www';
    }else{
        $mode = 'test';
    }
    
?>