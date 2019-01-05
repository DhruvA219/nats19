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
          <p>Click on events to access psych sheet.</p>
        </div>



          <div align="center">
            <div class="details">
              <div class="social">
              <div class="wrapper">
                <ul class="nav nav-tabs" role="tablist" >
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=333" ><img src="../img/events/3x3.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=222"><img src="../img/events/2x2.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=444"><img src="../img/events/4x4.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=555"><img src="../img/events/5x5.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=666"><img src="../img/events/6x6.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=777"><img src="../img/events/7x7.png" class="center center-icon"></a>
</li>
  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=333bf"><img src="../img/events/3BLD.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=333fm"><img src="../img/events/FMC.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=333oh"><img src="../img/events/3OH.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=333ft"><img src="../img/events/FEET.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=clock"><img src="../img/events/CLOCK.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=minx" ><img src="../img/events/MINX.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=pyram"><img src="../img/events/pyra.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=skewb"><img src="../img/events/skewb.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=sq1"><img src="../img/events/sq1.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=444bf"><img src="../img/events/4BLD.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=555bf"><img src="../img/events/5BLD.png" class="center center-icon"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-padding" href="../psych-sheet?eventId=333mbf"><img src="../img/events/MBLD.png" class="center center-icon"></a>
                  </li>
                </ul>
              </div>
              </div>
            </div>
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
                  <h4 align="middle"> Page Views (By Date)</h4>
                </div>
              </div>
            </div>';
      $now = new DateTime();
      $date=$now->format('Y-m-d');
      $get_page_visit_sql = "select view_date,sum(count) as total_cnt from `pageviews` group by view_date order by view_date desc";
      $page_result=$conn->query($get_page_visit_sql);
  echo'<div class="wrapper">
                <table>
                  <tr>
                    <th class="tg-s268">Date</th>
                    <th class="tg-s268">Views</th>
                  </tr>';
    $views_sum=0;
    foreach($page_result as $row){
      echo '<tr>';
      echo '<td class="tg-s268 lefttd">'.$row['view_date'].'</td>'; 
      echo '<td class="tg-s268">'.$row['total_cnt'].'</td>';  
      echo '</tr>';
      $views_sum=$views_sum+$row['total_cnt'];
    }
echo '</table> <div align="center"><b>Total Page views (Lifetime): '.$views_sum.'</b></div> </div>' ;
  ?>
    </section>

  </main>


<?php
include('../footer.php')
?>
