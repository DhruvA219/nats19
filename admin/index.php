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
									<h4 align="middle"> Events</h4>
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
		$travel_sum=0;
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
		$merch_sum=0;
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
		$views_sum=0
		foreach($page_result as $row){
			echo '<tr>';
			echo '<td class="tg-s268 lefttd">'.$row['page'].'</td>';	
			echo '<td class="tg-s268">₹'.$row['view_date'].'</td>';	
			echo '<td class="tg-s268">'.$row['count'].'</td>';	
			echo '</tr>';
			$views_sum=$views_sum+$row['count'];
		}
echo '</table> <div align="center"><b>Total Page views today: '.$views_sum.'</b></div> </div>' ;
                

?>




							</section>
		</div>
</section>
</main>




<?php
include('../footer.php');
?>
