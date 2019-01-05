<?php
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
  <link href="img/favicon.png" rel="apple-touch-icon">

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

  <div class="main-container">

    <header id="header" class="other-pages">
      <div class="container">

        <div id="logo" class="pull-left">
          <!-- Uncomment below if you prefer to use a text logo -->
          <!--<h1><a href="#main">Indian<span>Nationals</span></a></h1>-->
          <a href="" class="scrollto"><img src="img/nats-logo.svg" height="40px" alt="" title=""></a>      
        </div>

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
              <li class="<?php echo ($_SERVER['PHP_SELF'] == "/faq/index.php" ? "menu-active" : "");?>"><a href="faq">FAQ</a></li>
              <?php
              if(isset($_SESSION['email'])) {
               echo '<li class="buy-tickets"><a href="#">';
               echo '<img src=';
               echo '"' . $_SESSION['avatar'] . '" class="signedin">';
               echo "Hi " . strtok($_SESSION['name'], ' ') . "</a>";
               echo '<ul class="sub-nav"> <li class="sub-nav-item" ><a class="sub-nav-link2" href="myNats">My Nats</a></li>';
               echo '<li class="sub-nav-item" ><a class="sub-nav-link2" href="logout.php">Logout</a></li></ul></li>';

             } else {
               echo '<li class="buy-tickets">';
               echo '<a class="wcalogobd" href="https://www.worldcubeassociation.org/oauth/authorize?client_id=c02ad8e3446378078c5cbb73874bac335f08d9cc36f57c74fd11f9aa6df23a7e&redirect_uri=https%3A%2F%2Fnats19.in%2F&response_type=code&scope=public+dob+email">';
               echo '<img src="../img/events/wca-logo.svg" class="wcalogo">Login via WCA</a></li>';
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
      <div class="intro-container wow fadeIn custom-intro">
        <h1 class="mb-4 pb-0">Indian Nationals <br><span>2019</span> </h1>
        <!-- <h1 class="mb-4 pb-0">Indian Nationals 2019<br><span style="font-size:0.6em; text-transform: none;">The ultimate cubing experience</span> </h1> -->
        <h3 class="mb-4 pb-0" style="color:#f82249; font-size:2em;">The ultimate cubing experience </h1>
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
              <p>This is the 6th edition of Indian National Championship - a platform to bring together puzzle enthusiasts from all over the world. </p>
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


  </main>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-4 footer-info">
            <div class="wrapper" style="margin-top: 20px;">
              <img src="../img/logo.png" alt="TheEvenet">
              <p>
                © Indian Nationals 2019 Official Website
              </p>

            </div>
          </div>
          <div class="col-lg-4 col-md-4 footer-info">
            <div class="wrapper">
              <div class="social-links" style="margin-top: 20px;">
                <a href="https://www.worldcubeassociation.org/competitions/IndianNationals2019" target="about_blank"> <img class="footerimg" src="../img/events/wca-logo.svg"></a>
                <a href="https://www.facebook.com/IndianNationals2019/" target="about_blank"><img class="footerimg" src="../img/events/facebook.svg"></a>

                <a href="https://www.instagram.com/indiannationals19/" target="about_blank"><img class="footerimg" src="../img/events/instagram.svg"></a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-4 footer-info">
            <div class="wrapper">

              <div class="row">

                <div class="col-lg-12 col-md-12 footer-info" style="margin-top: 20px;">


                    <div class="contact-info">
                      <a href="mailto:contact@nats19.in"><i class="fas fa-envelope-square fa-2x"></i></a> contact@nats19.in 
                    </div>
                    <div class="contact-info">
                      <a href="tel:+918447852838"><i class="fas fa-phone-square fa-2x" aria-hidden="true"></i></a> (+91) 8447852838
                    </div>
                    <div class="contact-info">
                      <a href="tel:+919818616737"><i class="fas fa-phone-square fa-2x" aria-hidden="true"></i></a> (+91) 9818616737
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </footer>
  </div>
  
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <script>
    function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      if(t <= 0){
	      t = seconds = minutes = hours = days = 0;
      }
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
