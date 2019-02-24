<?php
include('../header.php')
?>
  <main id="main">
    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


      <div class="container">

        <div class="section-header">
          <h2>Treasure Hunt</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <center> <h3> Instructions </h3> </center>
            <ol>
              <li>The Treasure Hunt will start on Friday, 22nd February 00:00 IST and will end on Sunday, 24th February 23:59 IST.</li>
              <li>Top 5 participants registered for Indian Nationals will get to compete in the on-stage cubing Quiz at Indian Nationals.
              <li>Please do not discuss or share answers with anyone. Play fair to make it fun for everyone. Anyone found cheating will be disqualified.</li>
              <li>The answers are not case sensitive or whitespace sensitive. If you know the answer is CFOP, you can enter “CFOP” or “Cfop” or “cfop” or “C F O P” and the system will accept all of them. You have to enter the answer without quotes.</li>
              <li>For any queries, contact us at <a href="mailto:contact@nats19.in">contact@nats19.in</a>, our <a href="https://www.facebook.com/IndianNationals2019" target=_blank>Facebook page</a> or <a href="https://www.instagram.com/indiannationals19/" target=_blank>Instagram</a></li>
            </ol>
            <div class="tab">
<?php

session_start();
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
if(!isset($_SESSION['email'])) {
	echo " <a href='../solve/login-to-continue.php'><button class='tablinks'>";
echo "Login to play";
}
else{
echo " <a href='../solve'><button class='tablinks'>";

	$level_check_sql = "select * from `leaderboard` where email_id='".$_SESSION['email']."'";
	$result=$conn->query($level_check_sql);
       	if(mysqli_num_rows($result)>0){
	echo "Resume your journey";
}
else{
echo "Begin your journey";
}
}
?>
	</button></a>
<a href='../reconstructions'><button class='tablinks'> View Solutions </a>";
          </div>
          </div>
        </div>

       
      </div>

    </section>
  </main>


  <!--==========================
    Footer
  ============================-->
<?php
include('../footer.php')
?>
