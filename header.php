<?php
session_start();
if($_GET['code'] && !isset($_SESSION['email'])) {
    $post = [
    'grant_type' => 'authorization_code',
    'client_id' => 'c02ad8e3446378078c5cbb73874bac335f08d9cc36f57c74fd11f9aa6df23a7e',
    'client_secret' =>'0f1efea224774c1d461d49f1d25f02af1ab0a5ec523e851ad5f1ae86a96ab74a',
    'code' => $_GET['code'],
    'redirect_uri' => 'https://nats19.in/'
        ];

        $ch = curl_init('https://www.worldcubeassociation.org/oauth/token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    
        // execute!
  $response = curl_exec($ch); 
  

  $jsonObj = json_decode($response);
  
  $key = "access_token";
        
     
    $accessToken = $jsonObj->$key;


    $accessToken = "Authorization: Bearer " . $accessToken;

    $ch2 = curl_init('https://www.worldcubeassociation.org/api/v0/me');
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch2,CURLOPT_HTTPHEADER,array($accessToken));

    $cont = curl_exec($ch2);
    // var_dump($content);
    //session_start();
    $finalResponse = json_decode($cont);
   // var_dump($cont);
  // echo "<br> <br> <br>";
    $me_key = "me";
    $wca_id_key = "wca_id";
    $name = "name";
    $dob = "dob";
    $email = "email";
    $avatar = "avatar";
    $thumb_url = "thumb_url";
    //echo $finalResponse->$me_key->$wca_id_key;
    $_SESSION['wcaId'] = $finalResponse->$me_key->$wca_id_key;
    $_SESSION['name'] = $finalResponse->$me_key->$name;
    $_SESSION['dob'] = $finalResponse->$me_key->$dob;
   $_SESSION['email'] = $finalResponse->$me_key->$email;
    $_SESSION['avatar'] = $finalResponse->$me_key->$avatar->$thumb_url;
   // var_dump($_SESSION);
   header('location:/');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Indian Nationals 2019</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/venobox/venobox.min.js"></script>
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  
  <link href="../css/materialize.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

<div class="main-container">
  <!--==========================
    Header
  ============================-->
  <header id="header" class="other-pages">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
          <!--<h1><a href="#main">Indian<span>Nationals</span></a></h1>-->
  <a href="../" class="scrollto"><img src="../img/nats-logo.svg" height="40px" alt="" title=""></a>      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="<?php echo (($_SERVER['PHP_SELF'] == "/venue/index.php" || $_SERVER['PHP_SELF'] == "/team/index.php") ? "menu-active" : "");?>"><a href="#">About</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="../venue">Venue</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="../team">Team</a></li>
            </ul>
          </li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/events/index.php" ? "menu-active" : "");?>"><a href="../events">Events</a></li> <!-- events.html doesn't exist for now -->
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/schedule/index.php" ? "menu-active" : "");?>"><a href="../schedule">Schedule</a></li>
          <li class="<?php echo (($_SERVER['PHP_SELF'] == "/competitors/index.php" || $_SERVER['PHP_SELF'] == "/competitors/psych-sheet.php" || $_SERVER['PHP_SELF'] == "/register/index.php") ? "menu-active" : "");?>"><a href="#">Registration</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="../register">Register</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="../competitors">Competitors</a></li>
            </ul>
          </li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/shop/index.php" ? "menu-active" : "");?>"><a href="../shop">Shop</a></li>

          <li class="<?php echo (($_SERVER['PHP_SELF'] == "/transport/index.php" || $_SERVER['PHP_SELF'] == "/accommodation/index.php") ? "menu-active" : "");?>"><a href="#">Travel</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="../transport">Transport</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="../accommodation">Accommodation</a></li>
            </ul>
          </li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/sponsors/index.php" ? "menu-active" : "");?>"><a href="../sponsors">Sponsors</a></li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == "/faq/index.php" ? "menu-active" : "");?>"><a href="../faq">FAQ</a></li>

                       <?php
                 if(isset($_SESSION['email'])) {
                   echo '<li class="buy-tickets"><a href="#">';
       echo '<img src=';
       echo '"' . $_SESSION['avatar'] . '" class="signedin">';
       echo "Hi " . strtok($_SESSION['name'], ' ') . "</a>";
       echo '<ul class="sub-nav"><li class="sub-nav-item" ><a class="sub-nav-link2" href="../myNats">My Nats</a></li>';
      echo '<li class="sub-nav-item" ><a class="sub-nav-link2" href="../logout.php">Logout</a></li></ul></li>';
     } else {
                   echo '<li class="buy-tickets">';
       echo '<a class="wcalogobd" href="https://www.worldcubeassociation.org/oauth/authorize?client_id=c02ad8e3446378078c5cbb73874bac335f08d9cc36f57c74fd11f9aa6df23a7e&redirect_uri=https%3A%2F%2Fnats19.in%2F&response_type=code&scope=public+dob+email">';
       echo '<img src="../img/events/wca-logo.svg" class="wcalogo">Login via WCA</a></li>';
     }

     $page_url=$_SERVER['PHP_SELF'];
      $now = new DateTime();
      $date=$now->format('Y-m-d');
      $conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
      if(isset($_SESSION['email']) ) {
      $login_track_sql = "select * from `logins` where email='".$_SESSION['email']."'";
      $login_result=$conn->query($login_track_sql);
        if(mysqli_num_rows($login_result)>0){
                  $login_update_sql = "update `logins` SET count=count+1 where email='".$_SESSION['email']."'";
                  $conn->query($login_update_sql);
        }
        else{
                  $login_insert_sql = "insert into `logins` (`name`,`email`,`count`) VALUES ('".$_SESSION['name']."','".$_SESSION['email']."',1)";
                  $conn->query($login_insert_sql);         
        }
      }


      $get_page_visit_sql = "select * from `pageviews` where page='".$page_url."' and view_date='".$date."'";
      $page_result=$conn->query($get_page_visit_sql);
      if(mysqli_num_rows($page_result)>0){
                  $pageview_update_sql = "update `pageviews` SET count=count+1 where page='".$page_url."' and view_date='".$date."'";
                $conn->query($pageview_update_sql);

      }
      else{
                  $pageview_insert_sql = "insert into `pageviews` (`page`,`view_date`,`count` ) VALUES ('".$page_url."','".$date."',1)";
                $conn->query($pageview_insert_sql);
      }
          ?>


        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
