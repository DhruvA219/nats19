<?php
// Add sql query here to get the last question solved by the participant.
// Use post params here to see if evaluate returned success or failure. 
// Based on success or failure show a green or red banner with appropriate message.
//
$current_time=time();
$basetime_1=1550773800;
//$basetime_1=15507738;
$basetime_2=1551033000;
if ($current_time<$basetime_1 || $current_time>$basetime_2){
        header('location:https://nats19.in/solve/treasure-hunt-time-window.php');

}
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
	} else {
		$_SESSION['question_id'] = '1';
	}
	


include('../header.php');



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
          <h2> Treasure Hunt </h2>
        </div>

<?php
if(isset($_SESSION['success'])) {
	if($_SESSION['success'] === 0){
		echo '<div class="alert alert-danger alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Wrong answer!</strong> Try again.
</div>';
	}
	unset($_SESSION['success']);
}
?>




 <div class="row justify-content-center">
          <div class="treasurehunt question">
	  <h1> Level <?php echo (int)$_SESSION['question_id'] - 1 ?> </h1>
            <!-- <img src="../img/placeholder.png"> -->
	    <p> <?php include($_SESSION['question_id'].'.php'); ?> </p>
      <?php include($_SESSION['question_id'].'hint.php'); ?>
	    <div class="row">
             <form action="evaluate.php" method="POST" style="margin: 0 auto;">
	      <div class="input-field col s6">
               
	       <?php
if(isset($_SESSION['question_id'])) {
echo '<input type="hidden" id="questionId" name="questionId" value="' . $_SESSION['question_id'] . '"/>';
} else {
echo '<input type="hidden" id="questionId" name="questionId" value="1"/>';
}
//unset($_SESSION['question_id']);
?>      
         	<input type="text" id="answer" name="answer" placeholder="Your Answer" style="text-align: center;" class="validate"  maxlength="60" />
 <input type="submit" class="btn waves-effect waves-light"  id="btn" name = "btn" value="Submit" />
	      </div>
	</form>   
	 </div>
           

          </div>
          <div class="treasurehunt rank" style="padding-top: 0px;">
              <div class="addborder">
              <h1> Leaderboard </h1>
              <table class = "striped">
                  <tr>
    <th> Rank </th>
    <th> Name </th>
        <th> Level </th>
                  </tr>
<?php
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
$sqlTemplate ="select name,question_id - 1 as question_id,email_id,timestamp from `leaderboard` order by question_id desc, timestamp asc limit 5;";
$result = $conn->query($sqlTemplate);
$rank=0;
foreach($result as $row){
  $rank+=1;
  echo "<tr>";
  echo "<td>".$rank."</td>";
  echo "<td class='lefttd'>";
  echo $row['name']."</td>";
  echo "<td>".$row['question_id']."</td>";
  echo "</tr>";
}
?>
		  <tr>
                  <td></td>
<td> </td>		  
<td><a href = "../leaderboard">See All</a></td>
                </tr>
              </table>
            </div>
            <div class="instructions">
              <p> <a href="https://nats19.in/treasure/" target="_blank">Click here</a> to access instructions </p>
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
