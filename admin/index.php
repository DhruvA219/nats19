<?php
session_start();

if(!isset($_SESSION['email'])) {
	header('location:../');
}

else{
	$admins = array("arupela@worldcubeassociation.org", "upabreja@worldcubeassociation.org","abhijit.aj.1997@gmail.com","prabhnoor.virk13@gmail.com","kscsiddhu31@gmail.com","sk597@snu.edu.in");	
	if (!in_array($_SESSION['email'],$admins)){
	header('location:../');
	}
}


include('../header.php');
?>


<main id="main">


	<section id="buy-tickets" class="section-with-bg wow fadeInUp">
		<div class="container">
			<div class="section-header">
				<h2>Admin Dashboard</h2>
				<div class>
				</div>

				<p>       
					<?php echo "Welcome ". strtok($_SESSION['name'], ' '); ?>! 
					You can see sales and page view information here <p> 
					</div>

					<section id="Regforevent">	

						<div class="col-lg-12 venue-info">
							<div class="row justify-content-center">
								<div class="col-11 col-lg-8">
									<h4 align="middle"> Travel</h4>
								</div>
							</div>
						</div>

						<?php
						$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
						session_start();
						$email=$_SESSION['email'];
		
$travel_sql = "select sum(number_of_people) as total_people,source,destination,`time` from 
(select number_of_people,source,destination,`time` from user_travel usertravel inner join
travel_catalog ON travel_catalog.item_id=usertravel.item_id) userdetails group by source,destination,`time`";
$travel_result = $conn->query($travel_sql);
$travel_sum=0;
if (mysqli_num_rows($travel_result)==0){
echo '<p align="middle"> Nobody has reserved travel. </p>';
}
else{ echo'<div class="wrapper">
								<table>
									<tr>
										<th class="tg-s268">Timing</th>
										<th class="tg-s268">From </th>
										<th class="tg-s268">To</th>
										<th class="tg-s268">Number of Tickets</th>
									</tr>';
		foreach($travel_result as $row){
			echo '<tr>';
			echo '<td class="tg-s268">'.$row['time'].'</td>';	
			echo '<td class="tg-s268">'.$row['source'].'</td>';	
			echo '<td class="tg-s268">'.$row['destination'].'</td>';	
			echo '<td class="tg-s268">'.$row['total_people'].'</td>';	
			echo '</tr>';
			$travel_sum=$travel_sum+(100*$row['total_people']);
		}
echo '</table> <div align="center"><b>Total amount (before gateway fee): ₹'.$travel_sum.'</b></div></div>';

}

echo' <div class="col-lg-12 venue-info">
							<div class="row justify-content-center" style="margin-bottom:0px; margin-top:20px;"">
								<div class="col-11 col-lg-8">
									<h4 align="middle"> Merchandise</h4>
								</div>
							</div>
						</div>';
$merch_sql = "select sum(quantity) as total_quantity,name,price from 
(select quantity,name,price from user_merch usermerch inner join
merch_catalog ON merch_catalog.item_id=usermerch.item_id) userdetails group by name,price";
$merch_result = $conn->query($merch_sql);
$merch_sum=0;
if (mysqli_num_rows($merch_result)==0){
echo '<p align="middle"> Nobody has purchased any merchandise. </p>';
}
else{ echo'<div class="wrapper">
								<table>
									<tr>
										<th class="tg-s268">Item</th>
										<th class="tg-s268">Price </th>
										<th class="tg-s268">Quantity</th>
									</tr>';
		
		foreach($merch_result as $row){
			echo '<tr>';
			echo '<td class="tg-s268 lefttd">'.$row['name'].'</td>';	
			echo '<td class="tg-s268">₹'.$row['price'].'</td>';	
			echo '<td class="tg-s268">'.$row['total_quantity'].'</td>';	
			echo '</tr>';
			$merch_sum=$merch_sum+($row['price']*$row['total_quantity']);
		}
echo '</table> <div align="center"><b>Total amount (before gateway fee): ₹'.$merch_sum.'</b></div> </div>' ;

}

echo' <div class="col-lg-12 venue-info">
							<div class="row justify-content-center" style="margin-bottom:0px; margin-top:20px;"">
								<div class="col-11 col-lg-8">
									<h4 align="middle"> Accommodation</h4>
								</div>
							</div>
						</div>';
$acco_sql = "select name,price,quantity,check_in,check_out from 
(select quantity,name,price,check_in,check_out from user_acco useracco inner join
acco_catalog ON acco_catalog.item_id=useracco.item_id) userdetails ";
$acco_result = $conn->query($acco_sql);
$acco_sum=0;
if (mysqli_num_rows($acco_result)==0){
echo '<p align="middle"> Nobody has purchased any accommodation. </p>';
}
else{ echo'<div class="wrapper">
								<table>
									<tr>
										<th class="tg-s268">Item</th>
										<th class="tg-s268">Price </th>
										<th class="tg-s268">Check-In </th>
										<th class="tg-s268">Check-Out </th>
										<th class="tg-s268">Quantity</th>
									</tr>';

		foreach($acco_result as $row){
			echo '<tr>';
			echo '<td class="tg-s268 lefttd">'.$row['name'].'</td>';	
			echo '<td class="tg-s268">₹'.$row['price'].'</td>';	
			echo '<td class="tg-s268">'.$row['check_in'].'</td>';	
			echo '<td class="tg-s268">'.$row['check_out'].'</td>';	
			echo '<td class="tg-s268">'.$row['quantity'].'</td>';	
			echo '</tr>';
			$check1=(int) explode(" ",$row['check_in'])[0];
			$check2=(int) explode(" ",$row['check_out'])[0];
			$acco_sum=$acco_sum+($row['price']*$row['quantity']*($check2-$check1));
		}
echo '</table> <div align="center"><b>Total amount (before gateway fee): ₹'.$acco_sum.'</b></div> </div>' ;
}

echo' <div class="col-lg-12 venue-info">
							<div class="row justify-content-center" style="margin-bottom:0px; margin-top:20px;"">
								<div class="col-11 col-lg-8">
									<h4 align="middle"> registration</h4>
								</div>
							</div>
						</div>';
$regcnt_sql = "select count(*) as count from registrations" ;
$regcnt_result = $conn->query($regcnt_sql);
$paycnt_sql = "select * from payment" ;
$paycnt_result = $conn->query($paycnt_sql);
$total_collection=0;
foreach($paycnt_result as $row){
	$amount=$row['amount'];
	$fee=(0.0236*$amount+3.54);
	$total_collection=$total_collection+$amount-$fee;
}
$total_reg=$total_collection-$travel_sum-$merch_sum-$acco_sum;
 	echo'<div class="wrapper">
								<table>'
								foreach($regcnt_result as $row){
echo '<tr class="ts-s268"> Total Number of registrations </tr> <tr class="ts-s268">'  .$row['count'].'</tr>';
}
echo '<tr>
										<tr class="tg-s268">Approximate money collected (after Tax)</tr>
										<tr class="tg-s268">'.$total_collection.'</tr>
									</tr>
									<tr>
										<tr class="tg-s268">Total money from registrations (after Tax)</tr>
										<tr class="tg-s268">'.$total_reg.'</tr>
									</tr>
									</table>
									</div>';



echo' <div class="col-lg-12 venue-info">
							<div class="row justify-content-center" style="margin-bottom:0px; margin-top:20px;"">
								<div class="col-11 col-lg-8">
									<h4 align="middle"> Page Views (today)</h4>
								</div>
							</div>
						</div>';
   	  $now = new DateTime();
      $date=$now->format('Y-m-d');
      $get_page_visit_sql = "select * from `pageviews` where view_date='".$date."' order by count desc";
      $page_result=$conn->query($get_page_visit_sql);
 	echo'<div class="wrapper">
								<table>
									<tr>
										<th class="tg-s268">Page</th>
										<th class="tg-s268">Date </th>
										<th class="tg-s268">Views</th>
									</tr>';
		$views_sum=0;
		foreach($page_result as $row){
			echo '<tr>';
			echo '<td class="tg-s268 lefttd">'.$row['page'].'</td>';	
			echo '<td class="tg-s268">₹'.$row['view_date'].'</td>';	
			echo '<td class="tg-s268">'.$row['count'].'</td>';	
			echo '</tr>';
			$views_sum=$views_sum+$row['count'];
		}
echo '</table> <div align="center"><b>Total Page views today: '.$views_sum.'</b></div> </div>' ;
                


echo' <div class="col-lg-12 venue-info">
							<div class="row justify-content-center" style="margin-bottom:0px; margin-top:20px;"">
								<div class="col-11 col-lg-8">
									<h4 align="middle"> Page Views (Lifetime)</h4>
								</div>
							</div>
						</div>';
   	  $now = new DateTime();
      $date=$now->format('Y-m-d');
      $get_page_visit_sql = "select page,sum(count) as total_cnt from `pageviews` group by page order by total_cnt desc";
      $page_result=$conn->query($get_page_visit_sql);
 	echo'<div class="wrapper">
								<table>
									<tr>
										<th class="tg-s268">Page</th>
										<th class="tg-s268">Views</th>
									</tr>';
		$views_sum=0;
		foreach($page_result as $row){
			echo '<tr>';
			echo '<td class="tg-s268 lefttd">'.$row['page'].'</td>';	
			echo '<td class="tg-s268">'.$row['total_cnt'].'</td>';	
			echo '</tr>';
			$views_sum=$views_sum+$row['total_cnt'];
		}
echo '</table> <div align="center"><b>Total Page views (Lifetime): '.$views_sum.'</b></div> </div>' ;
                
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
		</div>
</section>
</main>




<?php
include('../footer.php');
?>
