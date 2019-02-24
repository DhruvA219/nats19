<?php
// Add sql query here to get the last question solved by the participant.
// Use post params here to see if evaluate returned success or failure. 
// Based on success or failure show a green or red banner with appropriate message.
//
session_start();
$question_id=1;
    if (isset($_GET['question_id'])){
      $question_id=$_GET['question_id'] ;
    }
  

include('../header.php');



echo '<head>
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





 <div class="row justify-content-center">
          <div class="treasurehunt question">
	  <h1> Level ' ;
    echo $question_id - 1 ;
echo '</h1>
            <!-- <img src="../img/placeholder.png"> -->
	    <p> ';
         include($question_id.'.php');
     echo '</p>';    
      include($question_id.'hint.php'); 

       
echo '<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Show Solution
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">';
  include($question_id.'a.php'); 
echo '</div>
</div><div class="tab">
 <a href="../reconstructions?question_id='.($question_id-1).'"><center><button class="tablinks">Previous </button></center></a>
 <a href="../reconstructions?question_id='.($question_id+1).'"><center><button class="tablinks">Next </button></center></a>

          </div>';
?>

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
