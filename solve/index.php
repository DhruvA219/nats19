<?php
// Add sql query here to get the last question solved by the participant.
// Use post params here to see if evaluate returned success or failure. 
// Based on success or failure show a green or red banner with appropriate message.
//
session_start();

if (!isset($_SESSION['email'])) {
	header('location:login-to-continue.php');
}
        $conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
	$level_check_sql = "select * from `leaderboard` where email_id='".$_SESSION['email']."'";
	$result=$conn->query($level_check_sql);
       	if(mysqli_num_rows($result)>0)
	{
	foreach($result as $row){
	$_SESSION['question_id']=(string)$row['question_id'];
	}
	}
	


include('../header.php');


if(isset($_SESSION['success'])) {
	if($_SESSION['success'] === '1'){
   echo "a";	
	}
	unset($_SESSION['success']);
}
?>
<head>
  <title>HTML Reference</title>
</head>

  <main id="main">
    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container" style="text-align: center;">

        <div class="section-header">
          <h2> Treasure Hunt Bro! </h2>
        </div>
<?php
if(!isset($_SESSION['question_id'])){
include('1.php');
}
else{
include($_SESSION['question_id'].'.php');
}
?>

	<form action="evaluate.php" method="POST">
	  <input type="text" id="answer" name="answer" maxlength="60" />
          <!-- Here put php code to get the questionId and echo the tag in the next line. -->
<?php
if(isset($_SESSION['question_id'])) {
echo '<input type="hidden" id="questionId" name="questionId" value="' . $_SESSION['question_id'] . '"/>';
} else {
echo '<input type="hidden" id="questionId" name="questionId" value="1"/>';
}
unset($_SESSION['question_id']);
?>
          <input type="submit" id="btn" name = "btn" value="Submit" />
        </form>	
       
      </div>

    </section>
  </main>


  <!--==========================
    Footer
  ============================-->
<?php
include('../footer.php')
?>
