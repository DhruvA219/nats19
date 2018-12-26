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
  $result=$conn->query($repayment_verify_sql);


  if(mysqli_num_rows($result)>0)
  {
    echo '<script>window.location.href="https://nats19.in"  </script>';
  }

  else{


    session_start();
    $payment_id=$_GET['payment_id'];
    $email_id=$_SESSION['email'];
    $name=$_SESSION['name'];
    $birth_date=$_SESSION['dob'];
    $WCA_ID=$_SESSION['wcaId'];
    $country_iso2=$_SESSION['country_iso2'];
    $gender=$_SESSION['gender'];

    function checkEmpty($arr){
      $mycnt=0;
      foreach ($arr as $key => $value) {
        if($value == 0) {
          $mycnt+=1;
        }
      }
      if($mycnt==18){
        return false;
      }
      return true;

    }


    if(checkEmpty($_SESSION['events'])){

      $event_mapping = array("cb1" => '222', "cb2" => '333', "cb3" => '444', "cb4" => '555', "cb5" => '666', "cb6" => '777', "cb7" => '333bf', "cb8" => '333fm', "cb9" => '333oh', "cb10" => '333ft', "cb11" => 'clock', "cb12" => 'minx', "cb13" => 'pyram', "cb14" => 'skewb', "cb15" => 'sq1', "cb16" => '444bf', "cb17" => '555bf', "cb18" => '333mbf' );



      $existing_reg_verify_sql = "select * from `registrations` where email_id='".$email_id."'";
      $reg_result=$conn->query($existing_reg_verify_sql);

      $iso_sql = "select name from countries where iso2='".$country_iso2."'";
      $iso_result=$conn->query($case1_sql);
      $country_id='India';
      foreach($iso_result as $row){
        $country_id=$row['name'];
      }


      if(mysqli_num_rows($reg_result)>0)
      {
        $event_registration_mapping2=array();
        foreach ($_SESSION['events'] as $key => $value) {
          if($value == 1) {
            $event_registration_mapping2[$event_mapping[$key]]='Y';
          }
          else{
            $event_registration_mapping2[$event_mapping[$key]]='N';
          }
        }
        var_dump(event_registration_mapping2);
        foreach($reg_result as $row){
          foreach($event_mapping as $key => $value){
            if($row[$value]=='Y'){
              $event_registration_mapping2[$value]='Y';    
            }
          }
        }

        $values="'$email_id','$name','$WCA_ID','$birth_date','$gender','$country_id',";
        $values.="'";
        $values.=$event_registration_mapping2['222'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['333'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['444'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['555'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['666'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['777'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['333oh'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['333ft'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['333bf'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['333mbf'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['444bf'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['555bf'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['skewb'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['sq1'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['minx'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['pyram'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['clock'];
        $values.="',";
        $values.="'";
        $values.=$event_registration_mapping2['333fm'];
        $values.="'";
        $case1_sql = "delete from registrations where email_id='".$email_id."'";
        $conn->query($case1_sql);
        $case1_insert_sql = "insert into `registrations` (`email_id`, `name`, `WCAID`, `birth_date`,`gender`, `country_name`, `222`, `333`, `444`, `555`, `666`, `777`, `333oh`, `333ft`, `333bf`, `333mbf`, `444bf`, `555bf`, `skewb`, `sq1`, `minx`, `pyram`, `clock`, `333fm` ) VALUES ($values)";
        $conn->query($case1_insert_sql);

      }

      else{
        $event_registration_mapping=array();

        foreach ($_SESSION['events'] as $key => $value) {
          if($value == 1) {
            $event_registration_mapping[$event_mapping[$key]]='Y';
          }
          else{
            $event_registration_mapping[$event_mapping[$key]]='N';
          }
        }

        $values="'$email_id','$name','$WCA_ID','$birth_date','$gender','$country_id',";
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
        $sql = "insert into `registrations` (`email_id`, `name`, `WCAID`, `birth_date`,`gender`, `country_name`, `222`, `333`, `444`, `555`, `666`, `777`, `333oh`, `333ft`, `333bf`, `333mbf`, `444bf`, `555bf`, `skewb`, `sq1`, `minx`, `pyram`, `clock`, `333fm` ) VALUES ($values)";
        $conn->query($sql);
        $average_sql="insert into RanksAverage2 select personId,eventId,best,worldRank from RanksAverage inner join (select * from registrations where email_id='".$email_id."') registration1  where personId=WCAID";
        $single_sql="insert into RanksSingle2 select personId,eventId,best,worldRank from RanksSingle inner join (select * from registrations where email_id='".$email_id."') registration1  where personId=WCAID";
        $conn->query($average_sql);
        $conn->query($single_sql);

      }
    }
//update payment
    $payid = $_GET["payment_request_id"];
    $response = $api->paymentRequestStatus($payid);
    $amount=$response['amount'];
    $payment_sql="INSERT into `payment` (`payment_id`, `email_id`, `amount`) VALUES ('$payment_id','$email_id', $amount )";
    $conn->query($payment_sql);

//update travel in DB
    if(!is_null($_SESSION['travel'])){
      foreach ($_SESSION['travel'] as $key => $value) {
        $travel_sql="INSERT into `user_travel` (`payment_id`, `email_id`, `item_id`, `number_of_people`) VALUES ('$payment_id','$email_id', '$key',$value )";
        $conn->query($travel_sql);
      }
    }
  }



}
?>
    
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
  <?php
  include '../footer.php'
  ?>
