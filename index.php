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
    $gender = "gender";
    $country_iso2 = "country_iso2";
    
    //echo $finalResponse->$me_key->$wca_id_key;
    $_SESSION['wcaId'] = $finalResponse->$me_key->$wca_id_key;
    $_SESSION['name'] = $finalResponse->$me_key->$name;
    $_SESSION['dob'] = $finalResponse->$me_key->$dob;
   $_SESSION['email'] = $finalResponse->$me_key->$email;
    $_SESSION['avatar'] = $finalResponse->$me_key->$avatar->$thumb_url;
    $_SESSION['gender'] = $finalResponse->$me_key->$gender;
    $_SESSION['country_iso2'] = $finalResponse->$me_key->$country_iso2;
    
   // var_dump($_SESSION);
   header('location:/');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
 <meta charset="utf-8">
  <title>Indian Nationals 2019</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/materialize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  ============================-->
  <header id="header" class="other-pages">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
          <!--<h1><a href="#main">Indian<span>Nationals</span></a></h1>-->
  <a href="" class="scrollto"><img src="img/nats-logo.svg" height="40px" alt="" title=""></a>      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "menu-active" : "");?>"><a href="">Home</a></li>
          <li class="<?php echo (($_SERVER['PHP_SELF'] == "/venue/index.php" || $_SERVER['PHP_SELF'] == "/team/index.php") ? "menu-active" : "");?>"><a href="#">About</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="venue">Venue</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="team">Team</a></li>
            </ul>
          </li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/events/index.php" ? "menu-active" : "");?>"><a href="events">Events</a></li> <!-- events.html doesn't exist for now -->
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/schedule/index.php" ? "menu-active" : "");?>"><a href="schedule">Schedule</a></li>
            <li class="<?php echo (($_SERVER['PHP_SELF'] == "/competitors/index.php" || $_SERVER['PHP_SELF'] == "/competitors/psych-sheet.php" || $_SERVER['PHP_SELF'] == "/accommodation/register.php") ? "menu-active" : "");?>"><a href="#">Registration</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="register">Register</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="competitors">Competitors</a></li>
            </ul>
          </li>

          <li class="<?php echo (($_SERVER['PHP_SELF'] == "/transport/index.php" || $_SERVER['PHP_SELF'] == "/accommodation/index.php") ? "menu-active" : "");?>"><a href="#">Travel</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="transport">Transport</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="accommodation">Accommodation</a></li>
            </ul>
          </li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/sponsors/index.php" ? "menu-active" : "");?>"><a href="sponsors">Sponsors</a></li>
          <li class="<?php echo (($_SERVER['PHP_SELF'] == "/faq/index.php" || $_SERVER['PHP_SELF'] == "/contact/index.php") ? "menu-active" : "");?>"><a href="#">Help</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="faq">FAQ</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="contact">Contact</a></li>
            </ul>
          </li>
                       <?php
                 if(isset($_SESSION['email'])) {
                   echo '<li class="buy-tickets"><a href="#">';
       echo '<img src=';
       echo '"' . $_SESSION['avatar'] . '" class="signedin">';
       echo "Hi " . strtok($_SESSION['name'], ' ') . "</a>";
       echo '<ul class="sub-nav"> <li class="sub-nav-item" ><a class="sub-nav-link2" href="logout.php">Logout</a></li></ul></li>';
     } else {
                   echo '<li class="buy-tickets">';
       echo '<a href="https://www.worldcubeassociation.org/oauth/authorize?client_id=c02ad8e3446378078c5cbb73874bac335f08d9cc36f57c74fd11f9aa6df23a7e&redirect_uri=https%3A%2F%2Fnats19.in%2F&response_type=code&scope=public+dob+email">';
       echo '<img src="../img/events/wca.png" class="wcalogo">Login via WCA</a></li>';
     }
          ?>


        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">f
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Indian Nationals<br><span>2019</span> </h1>
      <p class="mb-4 pb-0">12-14 April, Shiv Nadar University</p>
      <div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>
     
<!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>-->
     <!-- <a href="#about" class="about-btn scrollto">About The Event</a>-->
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>This is the Indian National Championship 2019.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Indoor Sports Complex, Shiv Nadar University, Greater Noida</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>12-14 April 2019</p>
            </div>
        </div>
      </div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->
    <!--<section id="organisers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>The Team</h2>
          <p>This is the organising team of Indian Nationals 2019</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Brenden Legros</a></h3>
                <p>Quas alias incidunt</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
                <p>Consequuntur odio aut</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
                <p>Fugiat laborum et</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Jack Christiansen</a></h3>
                <p>Debitis iure vero</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Alejandrin Littel</a></h3>
                <p>Qui molestiae natus</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                <p>Non autem dicta</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section> -->

    <!--==========================
      Schedule Section
    ============================-->
    <!--<section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
          </li>
        </ul>



        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <!--<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <table class = "striped">
              <colgroup>
                <col class="grey" />
                <col class="red" />
                <col class="yellow" />
                <col class="green" />
                <col class="purple" />
                <col class="bldroom" />
              </colgroup>
              <thead>
                <tr>
                  <th> Time </th>
                  <th> Stage 1 </th>
                  <th> Stage 2 </th>
                  <th> Stage 3 </th>
                  <th> Stage 4 </th>
                  <th> BLD Room </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td > 8:00 </td>
                  <td colspan="5" rowspan="4" bgcolor="#ec407a"> Breakfast </td>
                </tr>
                <tr>
                  <td > 8:15 </td>
                </tr>
                <tr>
                  <td > 8:30 </td>
                </tr>
                <tr>
                  <td > 8:45 </td>
                </tr>
                <tr>
                  <td > 9:00 </td>
                </tr>
                <tr>
                  <td > 9:15 </td>
                  <td rowspan="4" bgcolor="#4dd0e1">
                    <img src="img/events/clock.png" alt="  LOGO" class="center">
                    Clock Combined Round 1 </td>
                    <td rowspan="4" bgcolor="#4dd0e1">
                      <img src="img/events/clock.png" alt="  LOGO" class="center"> Clock Combined Round 1 </td>
                      <td rowspan="2" bgcolor="#4dd0e1">  <img src="img/events/clock.png" alt="  LOGO" class="center"> Clock Combined Round 1 </td>
                    </tr>
                    <td > 9:30 </td>
                  </tr>
                  <tr>
                    <td > 9:45 </td>
                    <td rowspan="7" bgcolor="#ef5350">
                      <img src="img/events/7x7.png" alt="  LOGO" class="center">
                      7x7 Combined Round 1</td>
                      <td rowspan="7" bgcolor="#ef5350">
                        <img src="img/events/7x7.png" alt="  LOGO" class="center">
                        7x7 Combined Round 1</td>
                      </tr>
                      <tr>
                        <td > 10:00 </td>
                      </tr>
                      <tr>
                        <td > 10:15 </td>
                        <td rowspan="7" bgcolor="#90a4ae">
                          <img src="img/events/minx.png" alt="LOGO" class="center">
                          Megaminx Combined Round 1</td>
                          <td rowspan="7" bgcolor="#90a4ae">
                            <img src="img/events/minx.png" alt=" LOGO" class="center">
                            Megaminx Combined Round 1</td>
                            <tr>
                              <tr>
                                <td > 10:30 </td>
                              </tr>
                              <tr>
                                <td > 10:45 </td>
                              </tr>
                              <tr>
                                <td > 11:00 </td>
                              </tr>
                              <tr>
                                <td > 11:15 </td>
                                <td rowspan="2" bgcolor="#90a4ae">
                                  <img src="img/events/minx.png" alt="LOGO" class="center">
                                  Megaminx Combined Round 1</td>
                                  <td rowspan="2" bgcolor="#90a4ae">
                                    <img src="img/events/minx.png" alt="LOGO" class="center">
                                    Megaminx Combined Round 1</td>
                                    <td rowspan="3" bgcolor="#b0bec5">
                                      <img src="img/events/4BLD.png" alt="LOGO" class="center">
                                      4x4x4 Blindfolded final</td>
                                    </tr>
                                    <tr>
                                      <td > 11:30 </td>
                                    </tr>
                                    <tr>
                                      <td > 11:45 </td>
                                      <td rowspan="4" bgcolor="#8d6e63">
                                        <img src="img/events/6x6.png" alt="LOGO" class="center">
                                        6x6x6 Combined Round 1</td>
                                        <td rowspan="4" bgcolor="#8d6e63">
                                          <img src="img/events/6x6.png" alt="LOGO" class="center">
                                          6x6x6 Combined Round 1</td>
                                          <td rowspan="2" bgcolor="#8d6e63">
                                            <img src="img/events/6x6.png" alt="LOGO" class="center">
                                            6x6x6 Combined Round 1</td>
                                            <td rowspan="2" bgcolor="#8d6e63">
                                              <img src="img/events/6x6.png" alt="LOGO" class="center">
                                              6x6x6 Combined Round 1</td>
                                            </tr>
                                            <tr>
                                              <td > 12:00 </td>
                                              <td rowspan="4" bgcolor="#64b5f6">
                                                <img src="img/events/MBLD.png" alt="LOGO" class="center">
                                              3x3x3 MultiBlind Attempt 1 Cube Submission</td>
                                              </tr>
                                            </tr>
                                            <tr>
                                              <td > 12:15 </td>
                                              <td rowspan="4" bgcolor="#757575">
                                                <img src="img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Combined Round 1</td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Combined Round 1</td>
                                            </tr>
                                            <tr>
                                              <td > 12:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 12:45 </td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Combined Round 1</td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Combined Round 1</td>
                                            </tr>
                                            <tr>
                                              <td > 13:00 </td>
                                            </tr>
                                            <tr>
                                              <td > 13:15 </td>
                                                  <td colspan="5" rowspan="3" bgcolor="#009688"> Lunch </td>
                                            </tr>
                                            <tr>
                                              <td > 13:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 13:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 14:00 </td>
                                              <td rowspan="8" bgcolor="#90a4ae">
                                                <img src="img/events/5x5.png" alt="LOGO" class="center">
                                              5x5x5 Cube Combined Round 1</td>
                                              <td rowspan="8" bgcolor="#90a4ae">
                                                <img src="img/events/5x5.png" alt="LOGO" class="center">
                                              5x5x5 Cube Combined Round 1</td>
                                              <td rowspan="4" bgcolor="#f6f7fd">
                                                </td>
                                              <td rowspan="4" bgcolor="#f6f7fd">
                                                </td>
                                                <td rowspan="4" bgcolor="#64b5f6">
                                                  <img src="img/events/MBLD.png" alt="LOGO" class="center">
                                                3x3x3 MultiBlind Attempt 1</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                              <td > 14:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 14:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 14:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 15:00 </td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Final</td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Final</td>
                                            </tr>
                                            <tr>
                                              <td > 15:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 15:30 </td>
                                              <td rowspan="4" bgcolor="#ffa726">
                                              <img src="img/events/feet.png" alt="LOGO" class="center">
                                            3x3x3 with Feet Combined Round 1</td>
                                            <td rowspan="4" bgcolor="#ffa726">
                                            <img src="img/events/feet.png" alt="LOGO" class="center">
                                          3x3x3 with Feet Combined Round 1</td>
                                            </tr>
                                            <tr>
                                              <td > 15:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 16:00 </td>
                                            </tr>
                                            <tr>
                                              <td > 16:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 16:30 </td>
                                              <td rowspan="2" bgcolor="#f6f7fd">
                                                </td>
                                              <td rowspan="2" bgcolor="#f6f7fd">
                                                </td>
                                              <td rowspan="2" bgcolor="#ffa726">
                                              <img src="img/events/feet.png" alt="LOGO" class="center">
                                            3x3x3 with Feet Final</td>
                                            <td rowspan="2" bgcolor="#ffa726">
                                            <img src="img/events/feet.png" alt="LOGO" class="center">
                                          3x3x3 with Feet Final</td>
                                            </tr>
                                            <tr>
                                              <td > 16:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 17:00 </td>
                                              <td rowspan="4" bgcolor="#1565c0">
                                              <img src="img/events/FMC.png" alt="LOGO" class="center">
                                            3x3x3 Fewest Moves Attempt 1</td>
                                            <td rowspan="4" bgcolor="#1565c0">
                                            <img src="img/events/FMC.png" alt="LOGO" class="center">
                                          3x3x3 Fewest Moves Attempt 1</td>
                                          <td rowspan="4" bgcolor="#1565c0">
                                          <img src="img/events/FMC.png" alt="LOGO" class="center">
                                        3x3x3 Fewest Moves Attempt 1</td>
                                        <td rowspan="4" bgcolor="#1565c0">
                                        <img src="img/events/FMC.png" alt="LOGO" class="center">
                                      3x3x3 Fewest Moves Attempt 1</td>
                                            </tr>
                                            <tr>
                                              <td > 17:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 17:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 17:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 18:00 </td>
                                              <td rowspan="6" bgcolor="#f6f7fd">
                                                </td>
                                              <td rowspan="2" bgcolor="#90a4ae">
                                                <img src="img/events/minx.png" alt="LOGO" class="center">
                                                Megaminx Final</td>
                                                <td rowspan="2" bgcolor="#90a4ae">
                                                  <img src="img/events/minx.png" alt="LOGO" class="center">
                                                  Megaminx Final</td>
                                            </tr>
                                            <tr>
                                              <td > 18:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 18:30 </td>
                                              <td rowspan="2" bgcolor="#ffe082">

                                                Unofficial Event</td>
                                            </tr>
                                            <tr>
                                              <td > 18:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 19:00 </td>
                                              <td rowspan="2" bgcolor="#90caf9">

                                                Seminars</td>
                                            </tr>
                                            <tr>
                                              <td > 19:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 19:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 19:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 20:00 </td>
                                            </tr>
                                          </tbody>

                                        </table>




                                      </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <!--<div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
              <a><img src="img/schedule/Day2.png" height="1500"></a>
            </div>

          <!--  <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div>-->
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <!--<div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
              <a><img src="img/schedule/Day3.png" height="1500"></a>
            </div>

           <!-- <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div>-->
          <!-- End Schdule Day 2 -->

        <!--</div>

      </div>

    </section>-->

    <!--==========================
      Venue Section
    ============================-->
    <!--<section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.6102714797476!2d77.57096897542934!3d28.521367994650817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c94d7a94b99e3%3A0x43336882518f9b3c!2sSNU+Indoor+Sports+Complex!5e0!3m2!1sen!2sin!4v1545058172813" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>Indoor Sports Complex</h3>

              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="https://snu.edu.in/sites/default/files/IMG_2246.JPG" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section>-->

    <!--==========================
      Hotels Section
    ============================-->
    <!--<section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Hotels</h2>
          <p>Her are some nearby hotels</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 1</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.4 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 2</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>0.5 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 3</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.6 Mile from the Venue</p>
            </div>
          </div>

        </div>
      </div>

    </section>-->

    <!--==========================
      Gallery Section
    ============================-->
   <!-- <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
        <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
        <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
        <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
        <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
        <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
        <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
        <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
      </div>

    </section>
      -->
    <!--==========================
      Sponsors Section
    ============================-->
    <!--<section id="sponsors" class="section-with-bg wow fadeInUp">
         <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>
             <center><p> Coming soon! </p> </center> -->
    <!--

        <div class="row no-gutters sponsors-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div> -->

    <!--</section> -->

    <!--==========================
      F.A.Q Section
    ============================-->
    <!--<section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Can I add more events after my registration is approved?
                      <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      Yes, one can add more events after completing the registration and payment process. Please write to us giving details of the same and we'll be glad to assist you.<br>
NOTE - Addition of events facility is available only before the registration period ends, no requests will be entertained under any circumstance after 31st March 2019.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed"> Can I change/remove the events I've registered for? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      No, changing/removing events after your registration is approved is not allowed.


                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">What are the rules of this event? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      The competition follows the <a class="faq-hyperlink" href="https://www.worldcubeassociation.org/regulations" target="about_blank">WCA Regulations</a>. <a class="faq-hyperlink" href="https://www.youtube.com/watch?v=dPL3eV-A0ww&" target="about_blank"> Here</a> is a video summarizing the important ones. There will be an official competitor tutorial on Saturday at 10:15 A.M. where all important rules will be explained.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed"> Do I have to use my own cube to compete? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Yes! You are responsible for your own hardware in order to compete. This means you should bring your own puzzles.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">What is the normal age of competitors at these events? Are there age divisions?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      The competition is open to competitors of all age and gender. There will be only one combined ranking.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">How do I find the results? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                    All results are posted on the WCA website within a week after the competition finishes. However, for the day of competing, go to <a href="www.cubecomps.com">Cubecomps</a> to find information about current events. This is also where you will find information about upcoming rounds of events. Remember, the results are entered by a human so please be patient if you do not see your results immediately.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq7" class="collapsed">Can I attend the competition without competing? Do guests of competitors need to pay for the competition?
 <i class="fa fa-minus-circle"></i></a>
                  <div id="faq7" class="collapse" data-parent="#faq-list">
                    <p>
                    Yes, you can attend the competition as a spectator. <br>
No. All spectators are free to attend the competition at no cost. There is payment only to compete. However, if you require any other facilities such as travel and accommodation, that will be paid for.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq8" class="collapsed">Can I have fun at this event? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq8" class="collapse" data-parent="#faq-list">
                    <p>
                    More than you can imagine! Solving is just one part of the competition. There are also many unofficial events and seminars for you to have a wholesome experience.
                    </p>
                  </div>
                </li>
              </ul>
          </div>
        </div>

      </div>

    </section>-->

    <!--==========================
      Subscribe Section
    ============================
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="col-auto">
              <button type="submit">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section>

    <!--==========================
      Buy Ticket Section

    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">$150</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center">$250</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <!-- <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">$350</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div> -->

      <!-- Modal Order Form -->
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <select id="ticket-type" name="ticket-type" class="form-control" >
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <!--<section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Nihil officia ut sint molestiae tenetur.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section>--><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<script>
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(1555007400000);
initializeClock('clockdiv', deadline);
  </script>
</body>

</html>
