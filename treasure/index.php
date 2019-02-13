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
              <li>The answers are not case sensitive or whitespace sensitive. If the answer is CFOP, you can enter “CFOP” or “Cfop” or “cfop” or “C F O P” and the system will accept all of them. You have to enter the answer without quotes.</li>
              <li>For any queries, contact us at contact@nats19.in, our <a href="https://www.facebook.com/IndianNationals2019" target=_blank>Facebook page</a> or <a href="https://www.instagram.com/indiannationals19/" target=_blank>Instagram</a></li>
            </ol>
            <div class="tab">
<?php

session_start();
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
if(!isset($_SESSION['email'])) {
	echo " <a href='../solve/login-to-continue.php'><center><button class='tablinks'>";
echo "Login to play";
}
else{
echo " <a href='../solve'><center><button class='tablinks'>";

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
	</button></center></a>
          </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="treasurehunt question">
            <h1> Level 0 </h1>
            <img src="../img/placeholder.png">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="Your Answer" id="answer" type="text" class="validate">

              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
          <div class="treasurehunt rank">
              <div class="addborder">
              <h1> Top Rankers </h1>
              <table>
                <tr>
                  <th> Rank </th>
                  <th> Name </th>
                  <th> Level </th>
                </tr>
                <tr>
                  <td> 1 </td>
                  <td> Kamaal Khan </td>
                  <td> 69 </td>
                </tr>
                <tr>
                  <td> 2 </td>
                  <td> Kamaal Khan </td>
                  <td> 69 </td>
                </tr>
                <tr>
                  <td> 3 </td>
                  <td> Kamaal Khan </td>
                  <td> 69 </td>
                </tr>
                <tr class="personalrank">
                  <td> 10 </td>
                  <td> Kamaal Khan </td>
                  <td> 69 </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><a href = "#">See All</a></td>
                </tr>
              </table>
            </div>
            <div class="instructions">
              <p> <a href="#">Click here</a> to access instructions </p>
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
