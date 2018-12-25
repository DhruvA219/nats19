<?php

include '../header.php';
include 'src/instamojo.php';
include 'config.php';

$api = new Instamojo\Instamojo($api_key, $api_secret,'https://'.$mode.'.instamojo.com/api/1.1/');
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");

if (!isset($_GET["payment_request_id"]) || !isset($_GET["payment_id"]) || $api->paymentRequestStatus($_GET['payment_request_id'])['payments'][0]['payment_id']!=$_GET['payment_id']){
	echo '<script>window.location.href="https://nats19.in"  </script>';
}
//if($response['payments'][0]['payment_id']i
//)
//
else{
$repayment_verify_sql = "select * from `payment` where payment_id='".$_GET['payment_id']."'";

if($conn->query($repayment_verify_sql)===TRUE)
{
  echo '<script>window.location.href="https://nats19.in"  </script>';
}

session_start();
$payment_id=$_GET['payment_id'];
$email_id=$_SESSION['email'];
$name=$_SESSION['name'];
$birth_date=$_SESSION['dob'];
$WCA_ID=$_SESSION['wcaId'];
$country_iso2=$_SESSION['country_iso2'];
$gender=$_SESSION['gender'];
$event_mapping = array("cb1" => '222', "cb2" => '333', "cb3" => '444', "cb4" => '555', "cb5" => '666', "cb6" => '777', "cb7" => '333bf', "cb8" => '333fm', "cb9" => '333oh', "cb10" => '333ft', "cb11" => 'clock', "cb12" => 'minx', "cb13" => 'pyram', "cb14" => 'skewb', "cb15" => 'sq1', "cb16" => '444bf', "cb17" => '555bf', "cb18" => '333mbf' );
$event_registration_mapping=array();

foreach ($_SESSION['events'] as $key => $value) {
  if($value == 1) {
    $event_registration_mapping[$event_mapping[$key]]='Y';
  }
  else{
    $event_registration_mapping[$event_mapping[$key]]='N';
  }
}

$values="'$email_id','$name','$WCA_ID','$birth_date','$gender','$country_iso2',";
$values.="'";
$values.=$event_registration_mapping['222'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['333'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['444'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['555'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['666'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['777'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['333oh'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['333ft'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['333bf'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['333mbf'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['444bf'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['555bf'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['skewb'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['sq1'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['minx'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['pyram'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['clock'];
$values.="',";
$values.="'";
$values.=$event_registration_mapping['333fm'];
$values.="'";
$sql = "insert into `registrations` (`email_id`, `name`, `WCAID`, `birth_date`,`gender`, `country_iso2`, `222`, `333`, `444`, `555`, `666`, `777`, `333oh`, `333ft`, `333bf`, `333mbf`, `444bf`, `555bf`, `skewb`, `sq1`, `minx`, `pyram`, `clock`, `333fm` ) VALUES ($values)";
$conn->query($sql);
$api = new Instamojo\Instamojo($api_key, $api_secret,'https://'.$mode.'.instamojo.com/api/1.1/');
$payid = $_GET["payment_request_id"];
$response = $api->paymentRequestStatus($payid);
$amount=$response['amount'];
$payment_sql="INSERT into `payment` (`payment_id`, `email_id`, `amount`) VALUES ('$payment_id','$email_id', $amount )";
$conn->query($payment_sql);

}
?>
<div class="w3-container">
    <h1 class='w3-center'>Your Payment Details! <a href='index.php'>Go back Home</a></h1>
    <p class="w3-center">You can also save all these in Database using simple Insert Query. </p>
    <div class="w3-container w3-center">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue w3-hover-blue">
      Click to see the insert Script.</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-margin w3-padding"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-blue w3-display-topright">&times;</span>
        <h1 class='w3-center'>Simple Insert Script!</h1>
        <script src="https://gist.github.com/hackerrahul/159a02782fece68b31e6177055a30033.js"></script>
    </div>
  </div>
</div>
    
 <?php


$api = new Instamojo\Instamojo($api_key, $api_secret,'https://'.$mode.'.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);


    echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
    echo "<h4>Purpose: " . $response['purpose'] . "</h4>" ;
    echo "<h4>Payment Status: " . $response['status'] . "</h4>" ;
    echo "<h4>Payment Amount: " . $response['amount'] . " ".$response['payments'][0]['currency']."</h4>" ;

  echo "<hr><pre>";
   print_r($response);
echo "</pre>";
    ?>


    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}



  ?>
 </div>
<?php
include '../footer.php'
?>
