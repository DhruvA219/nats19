<?php
session_start();

if(!isset($_SESSION['email'])) {
  header('location:../');
}

else{
  $admins = array("arupela@worldcubeassociation.org", "upabreja@worldcubeassociation.org","sp422@snu.edu.in"); 
  if (!in_array($_SESSION['email'],$admins)){
  header('location:../');
  }
}

include('../header.php')
?>
  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="competitors-details" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Competitors</h2>
          <p>Emails of all competitors below</p>
        </div>



          <div class="tab-content row justify-content-center">
            <!-- Competitors Table -->
            <div class="wrapper">

              <table class = "striped">
                <thead>
                  <tr>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Citizen of </th>
                  </tr>
                </thead>
                <tbody>
  
<?php
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
$sql = "SELECT * FROM registrations order by name";
$result = $conn->query($sql);
$competitor_count=0;
$newcomer_count=0;
$oldcomer_count=0;
$comp_222=0;
$comp_333=0;
$comp_444=0;
$comp_555=0;
$comp_666=0;
$comp_777=0;
$comp_333oh=0;
$comp_333bf=0;
$comp_333ft=0;
$comp_333fm=0;
$comp_444bf=0;
$comp_555bf=0;
$comp_minx=0;
$comp_pyram=0;
$comp_skewb=0;
$comp_clock=0;
$comp_sq1=0;
$comp_333mbf=0;

foreach($result as $row){
    $count=0;
    $competitor_count+=1;
    echo "<tr>";
    echo "<td class='lefttd'>";
    if(!is_null($row['WCAID']) && $row['WCAID']!=""){
            echo "<a href='https://www.worldcubeassociation.org/persons/".$row['WCAID']."' target='_blank'>";
            $oldcomer_count+=1;
    }
    else{
      $newcomer_count+=1;
    }
    echo $row['name']."</a></td>";
    echo "<td class='lefttd'>".$row['email_id']."</td>";
    echo "<td class='lefttd'>".$row['country_name']."</td>";
    echo "</tr>";
}

    echo "<tr>";
    echo "<td class='lefttd'></td>";
    echo "<td class='lefttd'></td>";
    echo "<td class='lefttd'></td>";
    echo "</tr>";

?>
                                   </tbody>
              </table>
        <br> <p align="middle"> <b>
          <?php 
          echo $newcomer_count.' first-timers + '.$oldcomer_count.' returners   = '.$competitor_count.' people'; ?> </b> </p>
          <!-- 3x3 Psych Sheet Table -->
        </div>
      </div>
      </div>
   <?php
      echo' <div class="col-lg-12 venue-info">
              <div class="row justify-content-center" style="margin-bottom:0px; margin-top:20px;"">
                <div class="col-11 col-lg-8">
                  <h4 align="middle"> User Login Count</h4>
                </div>
              </div>
            </div>';
      $login_count_sql = "select * from `logins`";
      $login_result=$conn->query($login_count_sql);
  echo'<div class="wrapper">
                <table>
                  <tr>
                    <th class="tg-s268">Name</th>
                    <th class="tg-s268">Email</th>
                    <th class="tg-s268">Page Views</th>
                  </tr>';
    foreach($page_result as $row){
      echo '<tr>';
      echo '<td class="tg-s268 lefttd">'.$row['name'].'</td>'; 
      echo '<td class="tg-s268 lefttd">'.$row['email'].'</td>'; 
      echo '<td class="tg-s268">'.$row['count'].'</td>';  
      echo '</tr>';
    }
echo '</table>  </div>' ;
  ?>
    </section>

  </main>


<?php
include('../footer.php')
?>
