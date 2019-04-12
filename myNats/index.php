<?php
session_start();

if(!isset($_SESSION['email'])) {
	header('location:login-to-continue.php');
}


include('../header.php');
?>


<main id="main">


	<section id="buy-tickets" class="section-with-bg wow fadeInUp">
		<div class="container">
			<div class="section-header">
				<h2>My Nats</h2>
				<div class>
				</div>

				<p>       
					<?php echo "Welcome ". strtok($_SESSION['name'], ' '); ?>! 
					You can see all your registration and accessories details here. Your groups will be available here by 5 April, 2019. <p> 
					</div>

					<section id="Regforevent">	


						<?php
						$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");

session_start();
$email=$_SESSION['email'];
echo '<div class="col-lg-12 venue-info">
	<div class="row justify-content-center">
        <div class="col-11 col-lg-8">
                <h4 align="middle"> Groups</h4>
        </div>
</div>
</div>';
$group_sql = "SELECT * from groups where email_id='$email'";
$group_result=$conn->query($group_sql);
 echo'<div class="wrapper">
	                                                                 <table> <tr>                                                                             <th class="tg-s268">Event</th>									          										                                                                                 <th class="tg-s268">Group</th>	
                                                                        </tr>';

                foreach($group_result as $row){
                        echo '<tr>';
                        echo '<td class="tg-s268">'.$row['event'].'</td>';
                        echo '<td class="tg-s268">'.$row['group'].'</td>';
                        echo '</tr>';
                }
echo '</table> </div>';
echo '<div class="col-lg-12 venue-info" style="margin-top:20px;">
<div class="row justify-content-center">
	<div class="col-11 col-lg-8">
		<h4 align="middle"> Events</h4>
	</div>
</div>
</div>';
$sql = "SELECT * FROM registrations where email_id='$email'";
$result = $conn->query($sql);
if (mysqli_num_rows($result)==0){
							echo '<p align="middle"> You have not registered for any event. </p>';
						}

						$regd_events=0;
						foreach($result as $row){
							echo '<ul class="nav nav-tabs" role="tablist">';
							if ($row['222']=='Y'){
								echo '<li class="nav-item"><input type="checkbox" disabled id="cb1" /> <label for="cb1"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/2x2.png" /></label></li>'
								;	
								$regd_events+=1;}
								if ($row['333']=='Y'){
									echo '<li class="nav-item"><input type="checkbox" disabled id="cb2" /> <label for="cb2"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/3x3.png" /></label></li>'
									;$regd_events+=1;}
									if ($row['444']=='Y'){
										echo '<li class="nav-item"><input type="checkbox" disabled id="cb3" /> <label for="cb3"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/4x4.png" /></label></li>'
										;$regd_events+=1;}
										if ($row['555']=='Y'){
											echo '<li class="nav-item"><input type="checkbox" disabled id="cb4" /> <label for="cb4"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/5x5.png" /></label></li>'
											;$regd_events+=1;       }
											if ($row['666']=='Y'){
												echo '<li class="nav-item"><input type="checkbox" disabled id="cb5" /> <label for="cb5"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/6x6.png" /></label></li>'
												;   $regd_events+=1;     }
												if ($row['777']=='Y'){
													echo '<li class="nav-item"><input type="checkbox" disabled id="cb6" /> <label for="cb6"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/7x7.png" /></label></li>'
													;        $regd_events+=1;}
													if ($row['333bf']=='Y'){
														echo '<li class="nav-item"><input type="checkbox" disabled id="cb7" /> <label for="cb7"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/3BLD.png" /></label></li>'
														;$regd_events+=1;}
														if ($row['333fm']=='Y'){
															echo '<li class="nav-item"><input type="checkbox" disabled id="cb8" /> <label for="cb8"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/FMC.png" /></label></li>'
															;     $regd_events+=1;   }
															if ($row['333oh']=='Y'){
																echo '<li class="nav-item"><input type="checkbox" disabled id="cb9" /> <label for="cb9"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/3OH.png" /></label></li>'
																;      $regd_events+=1;  }
																if ($row['333ft']=='Y'){
																	echo '<li class="nav-item"><input type="checkbox" disabled id="cb10" /> <label for="cb10"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/FEET.png" /></label></li>'
																	;$regd_events+=1;}
																	if ($row['clock']=='Y'){
																		echo '<li class="nav-item"><input type="checkbox" disabled id="cb11" /> <label for="cb11"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/CLOCK.png" /></label></li>'
																		;$regd_events+=1;}
																		if ($row['minx']=='Y'){
																			echo '<li class="nav-item"><input type="checkbox" disabled id="cb12" /> <label for="cb12"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/MINX.png" /></label></li>'
																			;       $regd_events+=1; }
																			if ($row['pyram']=='Y'){
																				echo '<li class="nav-item"><input type="checkbox" disabled id="cb13" /> <label for="cb13"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/pyra.png" /></label></li>';
																				$regd_events+=1;}
																				if ($row['skewb']=='Y'){
																					echo '<li class="nav-item"><input type="checkbox" disabled id="cb14" /> <label for="cb14"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/skewb.png" /></label></li>';$regd_events+=1;
																				}
																				if ($row['sq1']=='Y'){
																					echo '<li class="nav-item"><input type="checkbox" disabled id="cb15" /> <label for="cb15"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/sq1.png" /></label></li>';$regd_events+=1;
																				}
																				if ($row['444bf']=='Y'){
																					echo '<li class="nav-item"><input type="checkbox" disabled id="cb16" /> <label for="cb16"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/4BLD.png" /></label></li>';$regd_events+=1;
																				}
																				if ($row['555bf']=='Y'){
																					echo '<li class="nav-item"><input type="checkbox" disabled id="cb17" /> <label for="cb17"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/5BLD.png" /></label></li>';$regd_events+=1;
																				}
																				if ($row['333mbf']=='Y'){
																					echo '<li class="nav-item"><input type="checkbox" disabled id="cb18" /> <label for="cb18"><img style="-webkit-filter:none; filter:none;" src="../img/eventscolor/MBLD.png" /></label></li>';$regd_events+=1;
																				}

																			}
																			echo '</ul>';



																			

																			echo' <div class="col-lg-12 venue-info">
							<div class="row justify-content-center" style="margin-bottom:0px; margin-top:20px;">
								<div class="col-11 col-lg-8">
									<h4 align="middle"> Travel</h4>
								</div>
							</div>
						</div>';
$travel_sql = "select sum(number_of_people) as total_people,source,destination,`time` from 
(select number_of_people,source,destination,`time` from user_travel usertravel inner join
travel_catalog ON travel_catalog.item_id=usertravel.item_id where email_id='$email') userdetails group by source,destination,`time`";
$travel_result = $conn->query($travel_sql);
if (mysqli_num_rows($travel_result)==0){
echo '<p align="middle"> You have not reserved any travel. </p>';
}
else{ echo'<div class="wrapper">
								<table>
									<tr>
										<th class="tg-s268">Timing</th>
										<th class="tg-s268">From </th>
										<th class="tg-s268">To</th>
										<th class="tg-s268">Number of People</th>
									</tr>';

		foreach($travel_result as $row){
			echo '<tr>';
			echo '<td class="tg-s268">'.$row['time'].'</td>';	
			echo '<td class="tg-s268">'.$row['source'].'</td>';	
			echo '<td class="tg-s268">'.$row['destination'].'</td>';	
			echo '<td class="tg-s268">'.$row['total_people'].'</td>';	
			echo '</tr>';
		}
echo '</table>'; 
	echo '<div>
<h4 align="middle" style="margin-top:20px;"> Travel Instructions </h4>
<p> Pickup from Pari Chowk metro station will be from gate number 2. The bus will start <b> strictly as per schedule </b>. Please be on time. For departure from SNU, the bus will depart from Indoor Sports Complex Gate. Contact numbers for assistance regarding bus number and pickup are given below:</p>
<ol>
<li style="float:none">Prabhath: 9908260874 </li>
<li style="float:none">Santhosh: 8130486610 </li>
<li style="float:none">Siddharth: 8939296044</li>
</ol>
        </div>';


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
echo' <div class="col-lg-12 venue-info">
							<div class="row justify-content-center" style="margin-bottom:0px; margin-top:20px;"">
								<div class="col-11 col-lg-8">
									<h4 align="middle"> Accommodation</h4>
								</div>
							</div>
						</div>';
$acco_sql = "select name,price,quantity,check_in,check_out,room from 
(select quantity,name,price,check_in,check_out,room from user_acco useracco inner join
acco_catalog ON acco_catalog.item_id=useracco.item_id where email_id='$email') userdetails ";
$acco_result = $conn->query($acco_sql);
if (mysqli_num_rows($acco_result)==0){
echo '<p align="middle"> You have not purchased any campus Accommodation </p>';
}
else{ echo'<div class="wrapper">
								<table>
									<tr>
										<th class="tg-s268">Item</th>
										<th class="tg-s268">Price </th>
										<th class="tg-s268">Check-In </th>
										<th class="tg-s268">Check-Out </th>
										<th class="tg-s268">Quantity</th>
<th class="tg-s268">Room Number </th>
									</tr>';

		foreach($acco_result as $row){
			echo '<tr>';
			echo '<td class="tg-s268 lefttd">'.$row['name'].'</td>';	
			echo '<td class="tg-s268">₹'.$row['price'].'</td>';	
			echo '<td class="tg-s268">'.$row['check_in'].'</td>';	
			echo '<td class="tg-s268">'.$row['check_out'].'</td>';	
			echo '<td class="tg-s268">'.$row['quantity'].'</td>';	
			if($row['room']===NULL){
			  echo '<td class="tg-s268">To Be Updated</td>';
			}
			else{
				echo '<td class="tg-s268">'.$row['room'].'</td>';  
			}
			echo '</tr>';
		}
echo '</table> ';
echo'
<div>
<h4 align="middle" style="margin-top:20px;"> Accommodation Instructions </h4>
<p> Common rooms will be in the hostels (Male:2C and Female:2A). You should already have received communication regarding the same.. 2BHK, 1BHK and Studio will be in the Visitors Hostel(VH). <b> If you are staying in VH, please confirm your arrival time to our team at least one day in advance </b>if not done so already: </p>
<ol>
<li style="float:none"> Siddharth: 8939296044 </li>
<li style="float:none"> Prabhnoor: 9319659042 </li>
</ol>
<p>Important contact numbers(Intercom) for those staying in VH are given below:</p> 
<ol>
<li style="float:none">630: VH Reception </li>
<li style="float:none">604: Front Desk </li>
<li style="float:none">6628: Dining Hall 1 </li>
<li style="float:none">6627: Dining Hall 2 </li>
<li style="float:none">100: Security </li>
<li style="float:none">6621: Mini Mart </li>
<li style="float:none">655: Laundry </li>
</ol>
<p> For visitors hostel(VH), the default check-in time will be 3 PM and the default check-out time will be 12 PM. Please contact the organizers or above numbers for any exceptions to the same.
	</div>';
echo '</div>' ;

}

?>




							</section>
		</div>
</section>
</main>




<?php
include('../footer.php');
?>
