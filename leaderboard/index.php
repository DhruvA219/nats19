<?php
$current_time=time();
//$basetime_1=1550773800;
$basetime_1=15507738;
$basetime_2=1551033000;
if ($current_time<$basetime_1 || $current_time>$basetime_2){
	header('location:https://nats19.in/solve/treasure-hunt-time-window.php');

}
include('../header.php')
?>
  <main id="main">
    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Leaderboard </h2>
        </div>

           <div class="tab-content row justify-content-center">
            <!-- Competitors Table -->
            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="comp">
              <div class="wrapper">
              <table class = "striped">
                <thead>
                  <tr>
    <th> Rank </th>    
    <th> Name </th>
        <th> Level </th>
     <th> Last problem solved at </th>
                  </tr>
                </thead>
                <tbody>
<?php
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
$sqlTemplate ="select name,question_id,email_id,CONVERT_TZ(timestamp,'+00:00','+05:30') as timestamp from `leaderboard` order by question_id desc, timestamp asc;";
$result = $conn->query($sqlTemplate);
$rank=0;
foreach($result as $row){
  $rank+=1;
  echo "<tr>";
  echo "<td>".$rank."</td>";
  echo "<td class='lefttd'>";
  echo $row['name']."</td>";
  echo "<td>".$row['question_id']."</td>";
  echo "<td>".$row['timestamp']."</td>";
  echo "</tr>";
}
?>
                                   </tbody>
              </table>
          <!-- 3x3 Psych Sheet Table -->
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
