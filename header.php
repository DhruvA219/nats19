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
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/venobox/venobox.css" rel="stylesheet">
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
        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "menu-active" : "");?>"><a href="../">Home</a></li>
          <li class="<?php echo (($_SERVER['PHP_SELF'] == "/venue/index.php" || $_SERVER['PHP_SELF'] == "/team/index.php") ? "menu-active" : "");?>"><a href="#">About</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="../venue">Venue</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="../team">Team</a></li>
            </ul>
          </li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/events/index.php" ? "menu-active" : "");?>"><a href="../events">Events</a></li> <!-- events.html doesn't exist for now -->
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/schedule/index.php" ? "menu-active" : "");?>"><a href="../schedule">Schedule</a></li>
            <li class="<?php echo (($_SERVER['PHP_SELF'] == "/competitors/index.php" || $_SERVER['PHP_SELF'] == "/competitors/psych-sheet.php" || $_SERVER['PHP_SELF'] == "/accommodation/register.php") ? "menu-active" : "");?>"><a href="#">Registration</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="../register">Register</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="../competitors">Competitors</a></li>
            </ul>
          </li>

          <li class="<?php echo (($_SERVER['PHP_SELF'] == "/transport/index.php" || $_SERVER['PHP_SELF'] == "/accommodation/index.php") ? "menu-active" : "");?>"><a href="#">Travel</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="../transport">Transport</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="../accommodation">Accommodation</a></li>
            </ul>
          </li>
          <li class="<?php echo (($_SERVER['PHP_SELF'] == "/faq/index.php" || $_SERVER['PHP_SELF'] == "/contact/index.php") ? "menu-active" : "");?>"><a href="#">Help</a>
            <ul class="sub-nav">
                <li class="sub-nav-item programs"><a class="sub-nav-link" href="../faq">FAQ</a></li>
                <li class="sub-nav-item events"><a class="sub-nav-link" href="../contact">Contact</a></li>
            </ul>
          </li>
          <li class="<?php echo ($_SERVER['PHP_SELF'] == "/sponsors/index.php" ? "menu-active" : "");?>"><a href="../sponsors">Sponsors</a></li>
                       <?php
                 if(isset($_SESSION['email'])) {
                   echo '<li class="buy-tickets"><a href=" ">';
       echo '<img src=';
       echo '"' . $_SESSION['avatar'] . '" class="signedin">';
       echo "Welcome " . strtok($_SESSION['name'], ' ') . "</a></li>";
       echo '<li id = "logoutOfWebsite"><a href="logout.php">Logout</a></li>';
     } else {
                   echo '<li class="buy-tickets">';
       echo '<a href="https://www.worldcubeassociation.org/oauth/authorize?client_id=c02ad8e3446378078c5cbb73874bac335f08d9cc36f57c74fd11f9aa6df23a7e&redirect_uri=https%3A%2F%2Fnats19.in%2F&response_type=code&scope=public+dob+email">';
       echo '<img src="img/events/wca.png" class="wcalogo">Login via WCA</a></li>';
     }
          ?>


        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
