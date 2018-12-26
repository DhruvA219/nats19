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
          <h2>Psych Sheet</h2>
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
            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="comp">
              <div class="wrapper">
              <table class = "striped">
                <thead>
                  <tr>
    <th> # </th>    
    <th> Name </th>
        <th> Country </th>
     <th> Average </th>
    <th> WR </th>
    <th> Single </th>
    <th> WR </th> 
                  </tr>
                </thead>
                <tbody>
<?php
function formatCentiSecondsPart($value) {
            $x = $value%100;

            if($x <= 9) {
                return '0' . $x;
            } else {
                return $x;
            }
        }
        
        function convertToMinutesSeconds($iSeconds){
           $min = intval($iSeconds / 60);
           return $min . ':' . str_pad(($iSeconds % 60), 2, '0', STR_PAD_LEFT);
        }

         function formatCentiSeconds( $centi_seconds ) {
              $hours = 0;
              $initial = $centi_seconds;
  
              if ( $centi_seconds > 360000 )
              {
                $hours = floor( $centi_seconds / 360000 );
              }
              $centi_seconds = $centi_seconds % 360000;


              $result =  str_pad( $hours, 2, '0', STR_PAD_LEFT )
                   . gmdate( ':i:s', $centi_seconds/100 )
                   . ('.' . formatCentiSecondsPart($initial))
                   ;
                   
              if($result[0] == '0' && $result[1] != '0') {
                  return substr($result, 1);
              }
              
              
              if($result[0] == '0' && $result[1] == '0'
              && $result[3] == '0' && $result[4] != '0') {
                  return substr($result, 4);
              }
              
               if($result[0] == '0' && $result[1] == '0'
              && $result[3] == '0' && $result[4] == '0'
              && $result[6] == '0') {
                  return substr($result, 7);
              }
              
              
              if($result[0] == '0' && $result[1] == '0'
              && $result[3] == '0' && $result[4] == '0') {
                  return substr($result, 6);
              }

              if($result[0] == '0' && $result[1] == '0') {
                  return substr($result, 3);
              }
            
              


            }
        

         function convertResult($result, $eventId, $single) {
          if (is_null($result)) return "";
           if($eventId != '333mbf' && $eventId != '333fm') {
                return formatCentiSeconds($result);
           }
           else if($eventId == '333fm') {
                if($single == 1) {
                    return $result;
                } else {
                return $result/100;
                }
            }
          else if($eventId == '333mbf') {
                $points = 99 - (int)substr($result, 0, 2);
                $wrong = (int)substr($result, strlen($result)-2, 2); 
                $solved = $points + $wrong;
                $attempted = $solved + $wrong;
                return $solved . '/' . $attempted . " " . 
                
                convertToMinutesSeconds((int)substr($result, 3, 4));
          }

        }
$eventId=$_GET['eventId'];


$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
$sqlTemplate ="select psychRanks.name,psychRanks.WCAID,singleResult,singleRank,averageResult,averageRank,country_name as country  FROM
(select * from 
(select * from (select name,WCAID,best as singleResult,`%s`,worldRank as singleRank,country_name from registrations 
  LEFT JOIN (select * from RanksSingle2 where eventId='%s') eventRank on WCAID=personId) singleRanks where `%s`='Y') eventSolvers
LEFT JOIN (select personId,best as averageResult, worldRank as averageRank FROM RanksAverage2 where eventId='%s') averageRanks 
ON averageRanks.personId=eventSolvers.WCAID)  psychRanks
order by -averageRank desc, -singleRank desc, psychRanks.name asc;"; 
if ($eventId=='333bf'){
  $sqlTemplate ="select psychRanks.name,psychRanks.WCAID,singleResult,singleRank,averageResult,averageRank,country_name as country  FROM
(select * from 
(select * from (select name,WCAID,best as singleResult,`%s`,worldRank as singleRank,country_name from registrations 
  LEFT JOIN (select * from RanksSingle2 where eventId='%s') eventRank on WCAID=personId) singleRanks where `%s`='Y') eventSolvers
LEFT JOIN (select personId,best as averageResult, worldRank as averageRank FROM RanksAverage2 where eventId='%s') averageRanks 
ON averageRanks.personId=eventSolvers.WCAID)  psychRanks
order by -singleRank desc, -averageRank desc, psychRanks.name asc;";
}



$sql=sprintf($sqlTemplate,$eventId,$eventId,$eventId,$eventId);
$result = $conn->query($sql);
$rank=0;
foreach($result as $row){
  $rank+=1;
  echo "<tr>";
  echo "<td>".$rank."</td>";
  echo "<td>";
        if(!is_null($row['WCAID'])) {
            echo "<a href='https://www.worldcubeassociation.org/persons/".$row['WCAID']."' target='_blank'>";
        }       
  echo $row['name']."</a></td>";
  echo "<td>".$row['country']."</td>";
  echo "<td>".convertResult($row['averageResult'],$eventId,0)."</td>";
  echo "<td>".$row['averageRank']."</td>";
  echo "<td>".convertResult($row['singleResult'],$eventId,1)."</td>";
   echo "<td>".$row['singleRank']."</td>";
  echo "</tr>";
}
?>
                                   </tbody>
              </table>
          <!-- 3x3 Psych Sheet Table -->
        </div>
      </div>
      </div>
    </section>

  </main>


<?php
include('../footer.php')
?>
