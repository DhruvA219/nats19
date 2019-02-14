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
	} else {
		$_SESSION['question_id'] = '1';
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
//unset($_SESSION['question_id']);
?>
          <input type="submit" id="btn" name = "btn" value="Submit" />
        </form>	







 <div class="row justify-content-center">
          <div class="treasurehunt question">
	  <h1> Level <?php echo (int)$_SESSION['question_id'] - 1 ?> </h1>
            <!-- <img src="../img/placeholder.png"> -->
	    <p> <?php include($_SESSION['question_id'].'.php'); ?> </p>
	    <div class="row">
             <form action="evaluate.php" method="POST">
	      <div class="input-field col s6">
               
	       <?php
if(isset($_SESSION['question_id'])) {
echo '<input type="hidden" id="questionId" name="questionId" value="' . $_SESSION['question_id'] . '"/>';
} else {
echo '<input type="hidden" id="questionId" name="questionId" value="1"/>';
}
//unset($_SESSION['question_id']);
?>      
         	<input type="text" id="answer" name="answer" placeholder="Your Answer" class="validate"  maxlength="60" />

	      </div>
             <input type="submit" class="btn waves-effect waves-light"  id="btn" name = "btn" value="Submit" />
              <!--<button class="btn waves-effect waves-light" type="submit" name="action">Submit
                
              </button> -->
	</form>   
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
