<?php
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
                $result1=$result/100;
                return number_format((float)$result1, 2, '.', '');
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
  echo "<td class='lefttd'>";
    if(!is_null($row['WCAID']) && $row['WCAID']!=""){
            echo "<a href='https://www.worldcubeassociation.org/persons/".$row['WCAID']."' target='_blank'>";
        }       
  echo $row['name']."</a></td>";
  echo "<td class='lefttd'>".$row['country']."</td>";
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

      </div>

    </section>
  </main>


  <!--==========================
    Footer
  ============================-->
<?php
include('../footer.php')
?>
