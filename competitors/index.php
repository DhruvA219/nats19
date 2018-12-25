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
                    <a class="nav-link" href="../psych-sheet?eventId=333" ><img src="../img/events/3x3.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=222"><img src="../img/events/2x2.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=444"><img src="../img/events/4x4.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=555"><img src="../img/events/5x5.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=666"><img src="../img/events/6x6.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=777"><img src="../img/events/7x7.png" class="center"></a>
</li>
  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=333bf"><img src="../img/events/3BLD.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=333fm"><img src="../img/events/FMC.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=333oh"><img src="../img/events/3OH.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=333ft"><img src="../img/events/FEET.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=clock"><img src="../img/events/CLOCK.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=minx" ><img src="../img/events/MINX.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=pyram"><img src="../img/events/pyra.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=skewb"><img src="../img/events/skewb.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=sq1"><img src="../img/events/sq1.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=444bf"><img src="../img/events/4BLD.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=555bf"><img src="../img/events/5BLD.png" class="center"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../psych-sheet?eventId=333mbf"><img src="../img/events/MBLD.png" class="center"></a>
                  </li>
                </ul>
              </div>
              </div>
            </div>
          </div>

          <div class="tab-content row justify-content-center">
            <!-- Competitors Table -->

              <table class = "striped">
                <thead>
                  <tr>
                    <th> Name </th>
                    <th> Citizen of </th>
                    <th> <img src="../img/events/3x3.svg" class="low"> </th>
                    <th> <img src="../img/events/2x2.png" class="low">  </th>
                    <th> <img src="../img/events/4x4.png" class="low">  </th>
                    <th> <img src="../img/events/5x5.png" class="low"> </th>
                    <th> <img src="../img/events/6x6.png" class="low"> </th>
                    <th> <img src="../img/events/7x7.png" class="low"> </th>
                    <th> <img src="../img/events/3BLD.png" class="low"> </th>
                    <th> <img src="../img/events/FMC.png" class="low"> </th>
                    <th> <img src="../img/events/3OH.png" class="low"> </th>
                    <th> <img src="../img/events/FEET.png" class="low"> </th>
                    <th> <img src="../img/events/CLOCK.png" class="low"> </th>
                    <th> <img src="../img/events/MINX.png" class="low"> </th>
                    <th> <img src="../img/events/pyra.png" class="low"> </th>
                    <th> <img src="../img/events/skewb.png" class="low"> </th>
                    <th> <img src="../img/events/sq1.png" class="low"> </th>
                    <th> <img src="../img/events/4BLD.png" class="low"> </th>
                    <th> <img src="../img/events/5BLD.png" class="low"> </th>
                    <th> <img src="../img/events/MBLD.png" class="low"> </th>
                    <th> Total </th>
                  </tr>
                </thead>
                <tbody>
  
<?php
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
$sql = "SELECT * FROM registrations";
$result = $conn->query($sql);
foreach($result as $row){
    $count=0;
    echo "<tr>";
    echo "<td>";
    if(!is_null($row['WCAID'])){
            echo "<a href='https://www.worldcubeassociation.org/persons/".$row['WCAID']."' target='_blank'>";
    }
    echo $row['name']."</a></td>";
    echo "<td>".$row['country_iso2']."</td>";
    echo "<td>"; if ($row['333'] =="Y"){echo "<img src='../img/events/3x3.svg' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['222'] =="Y"){echo "<img src='../img/events/2x2.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['444'] =="Y"){echo "<img src='../img/events/4x4.png' class='low'>"; $count+=1; } echo"</td>";
    echo "<td>"; if ($row['555'] =="Y"){echo "<img src='../img/events/5x5.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['666'] =="Y"){echo "<img src='../img/events/6x6.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['777'] =="Y"){echo "<img src='../img/events/7x7.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333bf'] =="Y"){echo "<img src='../img/events/3BLD.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333fm'] =="Y"){echo "<img src='../img/events/FMC.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333oh'] =="Y"){echo "<img src='../img/events/3OH.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333ft'] =="Y"){echo "<img src='../img/events/FEET.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['clock'] =="Y"){echo "<img src='../img/events/CLOCK.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['minx'] =="Y"){echo "<img src='../img/events/MINX.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['pyram'] =="Y"){echo "<img src='../img/events/pyra.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['skewb'] =="Y"){echo "<img src='../img/events/skewb.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['sq1'] =="Y"){echo "<img src='../img/events/sq1.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['444bf'] =="Y"){echo "<img src='../img/events/4BLD.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['555bf'] =="Y"){echo "<img src='../img/events/5BLD.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>"; if ($row['333mbf'] =="Y"){echo "<img src='../img/events/MBLD.png' class='low'>"; $count+=1;} echo"</td>";
    echo "<td>".$count."</td>";
    echo "</tr>";
}
?>
                                   </tbody>
              </table>
          <!-- 3x3 Psych Sheet Table -->
        </div>
      </div>
    </section>

  </main>


<?php
include('../footer.php')
?>
