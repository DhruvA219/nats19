<?php
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
foreach($result as $row){
    $count=0;
    $competitor_count+=1;
    echo "<tr>";
    echo "<td class='lefttd'>";
    if(!is_null($row['WCAID'])){
            echo "<a href='https://www.worldcubeassociation.org/persons/".$row['WCAID']."' target='_blank'>";
            $oldcomer_count+=1;
    }
    else{
      $newcomer_count+=1;
    }
    echo $row['name']."</a></td>";
    echo "<td class='lefttd'>".$row['country_name']."</td>";
    echo "<td>"; if ($row['333'] =="Y"){echo "<img src='../img/events/3x3.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['222'] =="Y"){echo "<img src='../img/events/2x2.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['444'] =="Y"){echo "<img src='../img/events/4x4.svg' class='low'>"; $count+=1; } echo"</td>";
    echo "<td>"; if ($row['555'] =="Y"){echo "<img src='../img/events/5x5.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['666'] =="Y"){echo "<img src='../img/events/6x6.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['777'] =="Y"){echo "<img src='../img/events/7x7.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333bf'] =="Y"){echo "<img src='../img/events/3BLD.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333fm'] =="Y"){echo "<img src='../img/events/FMC.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333oh'] =="Y"){echo "<img src='../img/events/3OH.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333ft'] =="Y"){echo "<img src='../img/events/FEET.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['clock'] =="Y"){echo "<img src='../img/events/CLOCK.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['minx'] =="Y"){echo "<img src='../img/events/MINX.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['pyram'] =="Y"){echo "<img src='../img/events/pyra.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['skewb'] =="Y"){echo "<img src='../img/events/skewb.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['sq1'] =="Y"){echo "<img src='../img/events/sq1.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['444bf'] =="Y"){echo "<img src='../img/events/4BLD.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['555bf'] =="Y"){echo "<img src='../img/events/5BLD.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333mbf'] =="Y"){echo "<img src='../img/events/MBLD.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>".$count."</td>";
    echo "</tr>";
}
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
