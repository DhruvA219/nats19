<?php
//Here make an sql query and match the answer.
//Make entries to relevant tables. 
//make a post request back to index.php with success or failure.

session_start();
if(isset($_POST['btn'])) {
	$questionId = $_POST['questionId'];
        $conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
	$answer = $_POST['answer'];
	$answer = mysqli_real_escape_string($conn, $answer); 	
	$questionId = mysqli_real_escape_string($conn, $questionId);
	$answer = strtolower(preg_replace('/\s+/', '', $answer));
	$answer_check_sql = "select * from `treasures` where question_id=".$questionId." and answer='".$answer."'";
	$result=$conn->query($answer_check_sql);
	$success=0;
	$email_id=$_SESSION['email'];
	$name=$_SESSION['name'];
       	if(mysqli_num_rows($result)>0)
       	{
		$success=1;
		$questionId=(int)$questionId;
		$questionId+=1;
		$questionId=(string)$questionId;
		$remove_sql = "delete from leaderboard where email_id='".$email_id."'";
	        $conn->query($remove_sql);
          	$insert_sql = "insert into `leaderboard` (`email_id`, `question_id`,`name`) VALUES ('".$email_id."',".(int)$questionId.",'".$name."')"; 
	       $conn->query($insert_sql);

	}
	$_SESSION['success'] = $success;
	$_SESSION['question_id']=$questionId;
	 header('Location:/solve');


}

?>
