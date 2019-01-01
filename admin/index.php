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
					You can see item counts and page view details here <p> 
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
		$sum=0;
		foreach($travel_result as $row){
			echo '<tr>';
			echo '<td class="tg-s268">'.$row['time'].'</td>';	
			echo '<td class="tg-s268">'.$row['source'].'</td>';	
			echo '<td class="tg-s268">'.$row['destination'].'</td>';	
			echo '<td class="tg-s268">'.$row['total_people'].'</td>';	
			echo '</tr>';
			$sum=$sum+(100*$row['total_people']);
		}
echo '</table> <div align="center">Total amount (before gateway fee): ₹'.$sum.'</div></div>';

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
merch_catalog ON merch_catalog.item_id=usermerch.item_id where email_id='$email') userdetails group by name,price";
$merch_result = $conn->query($merch_sql);
if (mysqli_num_rows($merch_result)==0){
echo '<p align="middle"> You have not purchased any merchandise. </p>';
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
		}
echo '</table> </div>' ;

}


?>




							</section>
		</div>
</section>
</main>




<?php
include('../footer.php');
?>
