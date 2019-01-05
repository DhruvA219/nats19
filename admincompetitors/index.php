<?php
session_start();

if(!isset($_SESSION['email'])) {
  header('location:../');
}

else{
  $admins = array("arupela@worldcubeassociation.org", "upabreja@worldcubeassociation.org"); 
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
                    <th> Citizen of </th>
                    <th> <img src="../img/events/3x3.svg" class="low"> </th>
                    <th> <img src="../img/events/2x2.svg" class="low">  </th>
                    <th> <img src="../img/events/4x4.svg" class="low">  </th>
                    <th> <img src="../img/events/5x5.svg" class="low"> </th>
                    <th> <img src="../img/events/6x6.svg" class="low"> </th>
                    <th> <img src="../img/events/7x7.svg" class="low"> </th>
                    <th> <img src="../img/events/3BLD.svg" class="low"> </th>
                    <th> <img src="../img/events/FMC.svg" class="low"> </th>
                    <th> <img src="../img/events/3OH.svg" class="low"> </th>
                    <th> <img src="../img/events/FEET.svg" class="low"> </th>
                    <th> <img src="../img/events/CLOCK.png" class="low"> </th>
                    <th> <img src="../img/events/MINX.svg" class="low"> </th>
                    <th> <img src="../img/events/pyra.svg" class="low"> </th>
                    <th> <img src="../img/events/skewb.svg" class="low"> </th>
                    <th> <img src="../img/events/sq1.svg" class="low"> </th>
                    <th> <img src="../img/events/4BLD.svg" class="low"> </th>
                    <th> <img src="../img/events/5BLD.svg" class="low"> </th>
                    <th> <img src="../img/events/MBLD.svg" class="low"> </th>
                    <th> Total </th>
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
    echo "<td class='lefttd'>".$row['country_name']."</td>";
    echo "<td>"; if ($row['333'] =="Y"){$comp_333+=1;echo "<img src='../img/events/3x3.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['222'] =="Y"){$comp_222+=1;echo "<img src='../img/events/2x2.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['444'] =="Y"){$comp_444+=1;echo "<img src='../img/events/4x4.svg' class='low'>"; $count+=1; } echo"</td>";
    echo "<td>"; if ($row['555'] =="Y"){$comp_555+=1;echo "<img src='../img/events/5x5.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['666'] =="Y"){$comp_666+=1;echo "<img src='../img/events/6x6.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['777'] =="Y"){$comp_777+=1;echo "<img src='../img/events/7x7.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333bf'] =="Y"){$comp_333bf+=1;echo "<img src='../img/events/3BLD.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333fm'] =="Y"){$comp_333fm+=1;echo "<img src='../img/events/FMC.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333oh'] =="Y"){$comp_333oh+=1;echo "<img src='../img/events/3OH.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333ft'] =="Y"){$comp_333ft+=1;echo "<img src='../img/events/FEET.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['clock'] =="Y"){$comp_clock+=1;echo "<img src='../img/events/CLOCK.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['minx'] =="Y"){$comp_minx+=1;echo "<img src='../img/events/MINX.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['pyram'] =="Y"){$comp_pyram+=1;echo "<img src='../img/events/pyra.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['skewb'] =="Y"){$comp_skewb+=1;echo "<img src='../img/events/skewb.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['sq1'] =="Y"){$comp_sq1+=1;echo "<img src='../img/events/sq1.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['444bf'] =="Y"){$comp_444bf+=1;echo "<img src='../img/events/4BLD.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['555bf'] =="Y"){$comp_555bf+=1;echo "<img src='../img/events/5BLD.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333mbf'] =="Y"){$comp_333mbf+=1;echo "<img src='../img/events/MBLD.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>".$count."</td>";
    echo "</tr>";
}

    echo "<tr>";
    echo "<td class='lefttd'></td>";
    echo "<td class='lefttd'></td>";
    echo "<td>".$comp_333."</td>";
    echo "<td>".$comp_222."</td>";
    echo "<td>".$comp_444."</td>";
    echo "<td>".$comp_555."</td>";
    echo "<td>".$comp_666."</td>";
    echo "<td>".$comp_777."</td>";
    echo "<td>".$comp_333bf."</td>";
    echo "<td>".$comp_333fm."</td>";
    echo "<td>".$comp_333oh."</td>";
    echo "<td>".$comp_333ft."</td>";
    echo "<td>".$comp_clock."</td>";
    echo "<td>".$comp_minx."</td>";
    echo "<td>".$comp_pyram."</td>";
    echo "<td>".$comp_skewb."</td>";
    echo "<td>".$comp_sq1."</td>";
    echo "<td>".$comp_444bf."</td>";
    echo "<td>".$comp_555bf."</td>";
    echo "<td>".$comp_333mbf."</td>";
    echo "<td></td>";
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
    </section>

  </main>


<?php
include('../footer.php')
?>
