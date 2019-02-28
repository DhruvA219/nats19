<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/materialize.css">
</head>

<main id="main">
		<!--==========================
	==========================

	<!-- Buy Ticket Section -->

	<section id="buy-tickets" class="section-with-bg wow fadeInUp">
		<div class="container">
			<div class="section-header">
				<h2>Registration</h2>
				<div class>
				</div>

				<p> You can register for everything related to Indian Nationals here. All steps are optional. <p>
				</div>

				<section id="Regforevent" class="section-with-bg">
                                                <div class="regprogressbar">
            <table >
              <tr >
                <td >Events</td>
                <td >Merchandise</td>
                <td >Unofficial Events</td>
              </tr>
              <tr >
                <td ><img src="../img/progress-marker.svg" alt="" class="rotateimg"></td>
                <td ><img src="../img/progress-marker.svg" alt="" class="rotateimg"></td>
                <td ><img src="../img/progress-marker.svg" alt="" class="rotateimg"></td>
              </tr>
            </table>
            <div class="progressouter">
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                aria-valuemin="0" aria-valuemax="100" style="width:16%">
                </div>
                <img src="../img/progress.svg" alt="" class="progressbarimg">
                <img src="../img/progress-done.svg" alt="" class="progressbarimgend" >
              </div>
            </div>

              <table style="display: table; width: 100%; margin: -8px;">
                <tr >
                  <td ><img src="../img/progress-marker.svg" alt="" class="bottompointer"></td>
                  <td ><img src="../img/progress-marker.svg" alt="" class="bottompointer"></td>
                </tr>
                <tr >
                  <td >Travel</td>
                  <td >Accomodation</td>
                </tr>
              </table>
            </div>
					<div id="Events" class="tabcontent">
						<div class="col-lg-12 venue-info">
							<div class="row justify-content-center">
                                                                        <div class="col-11 col-lg-8">
                                                                        <h3 align="middle"> Events</h3>
                                                                        <p align="middle"> Step 1/5</p>
                                                                      </div>
                                                                    </div>

								<?php
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
session_start();
$email=$_SESSION['email'];
$sql = "SELECT * FROM registrations where email_id='$email'";
$result = $conn->query($sql);
$regd_events=0;
foreach($result as $row){
echo '<div class="row justify-content-center"><div class="col-11 col-lg-8"><p align="middle">You have registered for the following events:</p></div></div><ul class="nav nav-tabs" role="tablist">';
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
if ($regd_events<18){

echo '<div class="row justify-content-center"> <div class="col-11 col-lg-8"> <p align="middle">';
if ($regd_events==0){
	$base_fee=300;
	$current_time=time();
	$basetime_1=1548959400;
	$basetime_2=1551378600;
	$basetime_3=1554057000;

	if ($current_time>$basetime_1){
		if ($current_time<$basetime_2){
		$base_fee=350;
		}
		else{
		$base_fee=400;
		}

	}
	echo 'Select the events you want to add. A base fee of ₹'.$base_fee.' and a per event fee of ₹50 is applicable.';
}
else{
	echo 'Select the events you want to add. A per event fee of ₹50 is applicable.'	;
}
echo '</p> </div></div><ul class="nav nav-tabs" role="tablist">';
if (mysqli_num_rows($result)==0){
			echo '<li class="nav-item">
									<input type="checkbox" id="cb1" onchange="updateFee()" />
									<label for="cb1"><img src="../img/eventscolor/2x2.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb2" onchange="updateFee()" />
									<label for="cb2"><img src="../img/eventscolor/3x3.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb3" onchange="updateFee()" />
									<label for="cb3"><img src="../img/eventscolor/4x4.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb4" onchange="updateFee()" />
									<label for="cb4"><img src="../img/eventscolor/5x5.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb5" onchange="updateFee()" />
									<label for="cb5"><img src="../img/eventscolor/6x6.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb6" onchange="updateFee()" />
									<label for="cb6"><img src="../img/eventscolor/7x7.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb7" onchange="updateFee()" />
									<label for="cb7"><img src="../img/eventscolor/3BLD.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb8" onchange="updateFee()" />
									<label for="cb8"><img src="../img/eventscolor/FMC.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb9" onchange="updateFee()" />
									<label for="cb9"><img src="../img/eventscolor/3OH.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb10" onchange="updateFee()" />
									<label for="cb10"><img src="../img/eventscolor/FEET.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb11" onchange="updateFee()" />
									<label for="cb11"><img src="../img/eventscolor/CLOCK.png" /></label>
								</li>
								<li>
									<input type="checkbox" id="cb12" onchange="updateFee()" />
									<label for="cb12"><img src="../img/eventscolor/MINX.png" /></label>
								</li>
								<li>
									<li>
										<input type="checkbox" id="cb13" onchange="updateFee()" />
										<label for="cb13"><img src="../img/eventscolor/pyra.png" /></label>
									</li>
									<li>
										<input type="checkbox" id="cb14" onchange="updateFee()" />
										<label for="cb14"><img src="../img/eventscolor/skewb.png" /></label>
									</li>
									<li>
										<input type="checkbox" id="cb15" onchange="updateFee()" />
										<label for="cb15"><img src="../img/eventscolor/sq1.png" /></label>
									</li>
									<li>
										<input type="checkbox" id="cb16" onchange="updateFee()" />
										<label for="cb16"><img src="../img/eventscolor/4BLD.png" /></label>
									</li>
									<li>
										<input type="checkbox" id="cb17" onchange="updateFee()"/>
										<label for="cb17"><img src="../img/eventscolor/5BLD.png" /></label>
									</li>
									<li>
										<input type="checkbox" id="cb18" onchange="updateFee()" />
										<label for="cb18"><img src="../img/eventscolor/MBLD.png" /></label>
									</li>
								';

}
else
{

foreach($result as $row){
	if ($row['222']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb1" onchange="updateFee()"/> <label for="cb1"><img src="../img/eventscolor/2x2.png" /></label></li>'
;	}
if ($row['333']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb2" onchange="updateFee()"/> <label for="cb2"><img src="../img/eventscolor/3x3.png" /></label></li>'
;}
if ($row['444']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb3" onchange="updateFee()"/> <label for="cb3"><img src="../img/eventscolor/4x4.png" /></label></li>'
;}
if ($row['555']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb4" onchange="updateFee()"/> <label for="cb4"><img src="../img/eventscolor/5x5.png" /></label></li>'
 ;       }
if ($row['666']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb5" onchange="updateFee()"/> <label for="cb5"><img src="../img/eventscolor/6x6.png" /></label></li>'
;        }
if ($row['777']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb6" onchange="updateFee()"/> <label for="cb6"><img src="../img/eventscolor/7x7.png" /></label></li>'
;        }
if ($row['333bf']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb7" onchange="updateFee()"/> <label for="cb7"><img src="../img/eventscolor/3BLD.png" /></label></li>'
;}
if ($row['333fm']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb8" onchange="updateFee()"/> <label for="cb8"><img src="../img/eventscolor/FMC.png" /></label></li>'
;        }
if ($row['333oh']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb9" onchange="updateFee()"/> <label for="cb9"><img src="../img/eventscolor/3OH.png" /></label></li>'
;        }
if ($row['333ft']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb10" onchange="updateFee()"/> <label for="cb10"><img src="../img/eventscolor/FEET.png" /></label></li>'
;}
if ($row['clock']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb11" onchange="updateFee()"/> <label for="cb11"><img src="../img/eventscolor/CLOCK.png" /></label></li>'
;}
if ($row['minx']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb12" onchange="updateFee()"/> <label for="cb12"><img src="../img/eventscolor/MINX.png" /></label></li>'
;        }
if ($row['pyram']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb13" onchange="updateFee()"/> <label for="cb13"><img src="../img/eventscolor/pyra.png" /></label></li>';
}
if ($row['skewb']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb14" onchange="updateFee()"/> <label for="cb14"><img src="../img/eventscolor/skewb.png" /></label></li>';
      }
if ($row['sq1']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb15" onchange="updateFee()"/> <label for="cb15"><img src="../img/eventscolor/sq1.png" /></label></li>';
      }
if ($row['444bf']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb16" onchange="updateFee()"/> <label for="cb16"><img src="../img/eventscolor/4BLD.png" /></label></li>';
}
if ($row['555bf']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb17" onchange="updateFee()"/> <label for="cb17"><img src="../img/eventscolor/5BLD.png" /></label></li>';
      }
if ($row['333mbf']=='N'){
 echo '<li class="nav-item"><input type="checkbox" id="cb18" onchange="updateFee()"/> <label for="cb18"><img src="../img/eventscolor/MBLD.png" /></label></li>';
      }
 }
}
echo '</ul>';
}

?>

								<div class="wrapper">
									<div class="tab">
										<a href="#Travel"><button class="tablinks" onclick="skipCity(event, 'Travel', '24%')">Skip</button></a>
										<a href="#Travel"><button class="tablinks" onclick="openCity(event, 'Travel', '24%')">Save and Proceed</button></a>
									</div>

								</div>
							</div>
						</div>
						<div id="Travel" class="tabcontent">
							<div class="row justify-content-center">
								<div class="col-11 col-lg-8">
									<p align="middle"> Step 2/5</p>
									<h3 align="middle"> Bus Service</h3>
									<p align="middle">A prepaid bus service to commute between the nearest Metro Station and the Venue will be available at ₹100 per person per trip. Please select when will you be needing this bus service. </p>
									<p align="middle"><b> Note: </b>The nearest metro station is Pari Chowk and scheduled to be inaugrated by February. If there are delays, the bus service will be available for Noida Sector 16 Metro Station instead. </p>
								</div>
							</div>
							<div class="wrapper">
								<table>
									<tr>
										<th class="tg-0lax">Select</th>
										<th class="tg-s268">Date</th>
										<th class="tg-s268">Time</th>
										<th class="tg-s268">From </th>
										<th class="tg-s268">To</th>
										<th class="tg-s268">Number of People</th>
									</tr>
									<tr>
										<td class="tg-0lax">
											<div class="switch">
												<label>
													<input type="checkbox" id="cb19" class="travel-selector-class">
													<span class="lever"></span>

												</label>
											</div>
										</td>
										<td class="tg-s268">11 April</td>
										<td class="tg-s268">6:00 PM</td>
										<td class="tg-s268">Metro</td>
										<td class="tg-s268">SNU</td>
										<td class="tg-s268"> <select id="cbcb19" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="tg-0lax">
										<div class="switch">
											<label>
												<input type="checkbox" id="cb20" class="travel-selector-class">
												<span class="lever"></span>

											</label>
										</div>
									</td>
									<td class="tg-s268">12 April</td>
									<td class="tg-s268">8:00 AM </td>
									<td class="tg-s268">Metro</td>
									<td class="tg-s268">SNU</td>
									<td class="tg-s268"> <select id="cbcb20" onchange="updateFee()">
										<option value="" disabled="" selected="">Select</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class="tg-0lax">
									<div class="switch">
										<label>
											<input type="checkbox" id="cb21" class="travel-selector-class">
											<span class="lever"></span>

										</label>
									</div>
								</td>
								<td class="tg-s268">12 April </td>
								<td class="tg-s268">8:00 PM</td>
								<td class="tg-s268">SNU</td>
								<td class="tg-s268">Metro</td>
								<td class="tg-s268"> <select id="cbcb21" onchange="updateFee()">
									<option value="" disabled="" selected="">Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="tg-0lax">
								<div class="switch">
									<label>
										<input type="checkbox" id="cb22" class="travel-selector-class">
										<span class="lever"></span>

									</label>
								</div>
							</td>
							<td class="tg-s268">13 April</td>
							<td class="tg-s268">8:00 AM</td>
							<td class="tg-s268">Metro</td>
							<td class="tg-s268">SNU</td>
							<td class="tg-s268"> <select id="cbcb22" onchange="updateFee()">
								<option value="" disabled="" selected="">Select</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="tg-0pky">
							<div class="switch">
								<label>
									<input type="checkbox" id="cb23" class="travel-selector-class">
									<span class="lever"></span>

								</label>
							</div>
						</td>
						<td class="tg-0pky">13 April</td>
						<td class="tg-0pky">8:00 PM</td>
						<td class="tg-0pky">SNU</td>
						<td class="tg-0pky">Metro</td>
						<td class="tg-s268"> <select id="cbcb23" onchange="updateFee()">
							<option value="" disabled="" selected="">Select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</td>
				</tr>

				<tr>
					<td class="tg-0pky">
						<div class="switch">
							<label>
								<input type="checkbox" id="cb24" class="travel-selector-class">
								<span class="lever"></span>

							</label>
						</div>
					</td>
					<td class="tg-0pky">14 April</td>
					<td class="tg-0pky">8:00 AM</td>
					<td class="tg-0pky">Metro</td>
					<td class="tg-0pky">SNU</td>
					<td class="tg-s268"> <select id="cbcb24" onchange="updateFee()">
						<option value="" disabled="" selected="">Select</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="tg-0pky">
					<div class="switch">
						<label>
							<input type="checkbox" id="cb25" class="travel-selector-class">
							<span class="lever"></span>

						</label>
					</div>
				</td>
				<td class="tg-0pky">14 April</td>
				<td class="tg-0pky">8:00 PM</td>
				<td class="tg-0pky">SNU</td>
				<td class="tg-0pky">Metro</td>
				<td class="tg-s268"> <select id="cbcb25" onchange="updateFee()">
					<option value="" disabled="" selected="">Select</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</td>        </tr>
			<tr>
				<td class="tg-0pky">
					<div class="switch">
						<label>
							<input type="checkbox" id="cb26" class="travel-selector-class">
							<span class="lever"></span>

						</label>
					</div>
				</td>
				<td class="tg-0pky">15 April</td>
				<td class="tg-0pky">9:00 AM</td>
				<td class="tg-0pky">SNU</td>
				<td class="tg-0pky">Metro</td>
				<td class="tg-s268"> <select id="cbcb26" onchange="updateFee()">
					<option value="" disabled="" selected="">Select</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</td>
		</tr>
	</table>
</div>
<div class="tab">
	<div class="wrapper">
		<a href="#Events"><button class="tablinks" onclick="openCity(event, 'Events', '16%')">Previous</button></a>
		<a href="#Merch"><button class="tablinks" onclick="skipCity(event, 'Merch', '50%')">Skip</button></a>
		<a href="#Merch"><button class="tablinks" id="travel-Save and Proceed-button" onclick="openCity(event, 'Merch', '50%')">Save and Proceed</button></a>

	</div>
</div>
</div>
<div id="Merch" class="tabcontent">
	<div class="row justify-content-center">
		<div class="col-11 col-lg-11">
			<p align="middle"> Step 3/5</p>
			<h3 align="middle"> Merchandise</h3>
			<p align="middle">Make your Indian Nationals experience amazing by buying our amazing t-shirts and other stuff.</p>
			<p align="middle"><b>Note : </b>All pictures shown are for illustration purpose only. Actual product may vary slightly.</p>
			<div class="wrapper">
				<div class="uldiv">
					<ul>
						<li>
							<img src="../img/merchandise/cards.png" alt="">
							<h3>Cuber Cards</h3>
							<p> ₹399</p>
						<select id="cbcb38" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>

						<li>
							<img src="../img/merchandise/slingbag.jpeg" alt="">
							<h3>Travel Sling Bag</h3>
							<p> ₹699</p>
						<select id="cbcb69" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>
						<li>
							<img src="../img/merchandise/bottle.jpeg" alt="">
							<h3>Bottle</h3>
							<p> ₹449</p>
						<select id="cbcb70" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>


						<li>
							<img src="../img/merchandise/tshirt.png" alt="">
							<h3>Nats T-shirt</h3>
							<p> ₹499</p>
						<select id="cbcb27" onchange="updateFee()">
							<option value="" disabled selected>Size</option>
							<option value="S">S</option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
						</select>


						<select id="cbcb28" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>
						<li>
							<img src="../img/merchandise/ocd.jpeg" alt="">
							<h3>OCD T-shirt</h3>
							<p> ₹499</p>
						<select id="cbcb57" onchange="updateFee()">
							<option value="" disabled selected>Size</option>
							<option value="S">S</option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
						</select>


						<select id="cbcb58" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>
						<li>
							<img src="../img/merchandise/cloud.jpeg" alt="">
							<h3>Cubing Universe T-shirt</h3>
							<p> ₹499</p>
						<select id="cbcb59" onchange="updateFee()">
							<option value="" disabled selected>Size</option>
							<option value="S">S</option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
						</select>


						<select id="cbcb60" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>


						<li>
							<img src="../img/merchandise/mug.png" alt="">
							<h3>Mug</h3>
							<p> ₹299</p>
						<select id="cbcb29" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>

						<li>

							<img src="../img/merchandise/wristband.png" alt="">
							<h3>Wrist Band</h3>
							<p> ₹99</p>
						<select id="cbcb30" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>

						<li>

							<img src="../img/merchandise/caps.png" alt="">
							<h3>Cap</h3>
							<p> ₹249</p>
						<select id="cbcb31" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>

						<li>
							<img src="../img/merchandise/badge.png" alt="">
							<h3>Pin Badge</h3>
							<p> ₹49</p>
						<select id="cbcb32" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>

						<li>
							<img src="../img/merchandise/magnetbadge.png" alt="">
							<h3>Magnetic Badge</h3>
							<p> ₹99</p>
						<select id="cbcb33" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>

						<li>
							<img src="../img/merchandise/notebook.png" alt="">
							<h3>Writing Pad</h3>
							<p> ₹49</p>
						<select id="cbcb34" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>
						<li>
							<img src="../img/merchandise/keychain.png" alt="">
							<h3>Keychain</h3>
							<p> ₹199</p>
						<select id="cbcb35" onchange="updateFee()" >
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>
						<li>
							<img src="../img/merchandise/logo2.png" alt="">
							<h3>Nats Logo Sticker</h3>
							<p> ₹19</p>
						<select id="cbcb36" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>
						<li>
							<img src="../img/merchandise/logo1.png" alt="">
							<h3>Cuber Soul Sticker</h3>
							<p> ₹19</p>
						<select id="cbcb37" onchange="updateFee()">
							<option value="" disabled selected>Quantity</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</li>
					</ul>
				</div>
			</div>
			<div class="wrapper">
				<div class="tab">
					<a href="#Travel"><button class="tablinks" onclick="openCity(event, 'Travel', '24%')">Previous</button></a>
					<a href="#Accommodation"><button class="tablinks" onclick="skipCity(event, 'Accommodation', '75%')">Skip</button></a>
					<a href="#Accommodation"><button class="tablinks" onclick="openCity(event, 'Accommodation', '75%')">Save and Proceed</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- get this working-->
<div id="Accommodation" class="tabcontent">
	<div class="row justify-content-center">
		<div class="col-11 col-lg-8">
			<p align="middle"> Step 4/5</p>
			<h3 align="middle"> Accommodation</h3>
			<p align="middle">You can pre-book on-campus accommodation options here. For facility details, please refer to our <a href="https://nats19.in/uploads/Accommodation_Campus.pdf" target="about_blank">Campus Accommodation Prospectus</a>.</p>
			<h3 align="middle" style="font-size:1.6rem;font-weight:bold;">Terms and Conditions</h3>
			<ul style="list-style-type:disc !important;">
			<li style="list-style-type:disc !important;">For 2BHK,1BHK and Studio apartments, only competitors below the age of 18 will be allowed entry with a parent/guardian/sibling. The presence of at least one parent/guardian is necessary for entry in any of these facilities. Parents of other competitors of any age can also stay here.</li>
			<li style="list-style-type:disc !important;">For common rooms, only competitors aged 15 or more will be allowed. Parents are not allowed in hostels.</li>
			<li style="list-style-type:disc !important;">All residents must carry an ID proof. <b>No refunds will be issued.</b></li>
		</ul>
		</div>
	</div>

							<div class="wrapper">
								<table>
									<tr>
										<th class="tg-s268">Room Type</th>
										<th class="tg-s268">Price</th>
										<th class="tg-s268">Check-In </th>
										<th class="tg-s268">Check-Out</th>
										<th class="tg-s268">Quantity</th>
									</tr>
									<tr>
										<td class="tg-s268">2BHK</td>
										<td class="tg-s268">₹3600</td>
										<td class="tg-s268"> <select id="cb40a" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="1">11 April</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
										</select>
									</td>
										<td class="tg-s268"> <select id="cb40b" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
											<option value="5">15 April</option>
										</select>
									</td>
										<td class="tg-s268"> <select id="cbcb40" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="0">0 Rooms</option>
											<option value="1">1 Room</option>
											<option value="2">2 Rooms</option>
											<option value="3">3 Rooms</option>
											<option value="4">4 Rooms</option>
											<option value="5">5 Rooms</option>
											<option value="6">6 Rooms</option>
											<option value="7">7 Rooms</option>
										</select>
									</td>
								</tr>
									<tr>
										<td class="tg-s268">1BHK</td>
										<td class="tg-s268">₹2700</td>
											<td class="tg-s268"> <select id="cb41a" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="1">11 April</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
										</select>
									</td>
										<td class="tg-s268"> <select id="cb41b" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
											<option value="5">15 April</option>
										</select>
									</td>
										<td class="tg-s268"> <select id="cbcb41" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="0">0 Rooms</option>
											<option value="1">1 Room</option>
											<option value="2">2 Rooms</option>
											<option value="3">3 Rooms</option>
											<option value="4">4 Rooms</option>
											<option value="5">5 Rooms</option>
											<option value="6">6 Rooms</option>
											<option value="7">7 Rooms</option>
											<option value="8">8 Rooms</option>
											<option value="9">9 Rooms</option>
											<option value="10">10 Rooms</option>
										</select>
									</td>
								</tr>
	<tr>
										<td class="tg-s268">Studio</td>
										<td class="tg-s268">₹2000</td>
		<td class="tg-s268"> <select id="cb42a" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="1">11 April</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
										</select>
									</td>
										<td class="tg-s268"> <select id="cb42b" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
											<option value="5">15 April</option>
										</select>
									</td>										<td class="tg-s268"> <select id="cbcb42" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="0">0 Rooms</option>
											<option value="1">1 Room</option>
											<option value="2">2 Rooms</option>
											<option value="3">3 Rooms</option>
											<option value="4">4 Rooms</option>
											<option value="5">5 Rooms</option>
											<option value="6">6 Rooms</option>
											<option value="7">7 Rooms</option>
											<option value="8">8 Rooms</option>
											<option value="9">9 Rooms</option>
											<option value="10">10 Rooms</option>
										</select>
									</td>
								</tr>
	<tr>
										<td class="tg-s268">Common Room (Male)</td>
										<td class="tg-s268">₹500</td>
		<td class="tg-s268"> <select id="cb43a" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="1">11 April</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
										</select>
									</td>
										<td class="tg-s268"> <select id="cb43b" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
											<option value="5">15 April</option>
										</select>
									</td>										<td class="tg-s268"> <select id="cbcb43" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="0">0 People</option>
											<option value="1">1 People</option>
											<option value="2">2 People</option>
											<option value="3">3 People</option>
											<option value="4">4 People</option>
											<option value="5">5 People</option>
											<option value="6">6 People</option>
											<option value="7">7 People</option>
											<option value="8">8 People</option>
											<option value="9">9 People</option>
											<option value="10">10 People</option>
										</select>
									</td>
								</tr>
	<tr>
										<td class="tg-s268">Common Room (Female)</td>
										<td class="tg-s268">₹500</td>
		<td class="tg-s268"> <select id="cb44a" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="1">11 April</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
										</select>
									</td>
										<td class="tg-s268"> <select id="cb44b" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="2">12 April</option>
											<option value="3">13 April</option>
											<option value="4">14 April</option>
											<option value="5">15 April</option>
										</select>
									</td>										<td class="tg-s268"> <select id="cbcb44" onchange="updateFee()">
											<option value="" disabled="" selected="">Select</option>
											<option value="0">0 People</option>
											<option value="1">1 People</option>
											<option value="2">2 People</option>
											<option value="3">3 People</option>
											<option value="4">4 People</option>
											<option value="5">5 People</option>
											<option value="6">6 People</option>
											<option value="7">7 People</option>
											<option value="8">8 People</option>
											<option value="9">9 People</option>
											<option value="10">10 People</option>
										</select>
									</td>
								</tr>

	</table>
</div>


	<div class="wrapper">
		<div class="form-group">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="checkbox">
                <label>
                    <input id="check1" type="checkbox" name="agree" value="agree" /> I agree with the terms and conditions above.
                </label>
            </div>
        </div>
    </div>
		<div class="tab">
			<a href="#Merch"><button class="tablinks" onclick="openCity(event, 'Merch', '50%')">Previous</button></a>
			<a href="#Unofficial"><button class="tablinks" onclick="skipCity(event, 'Unofficial', '84%')">Skip</button></a>
			<a href="#Unofficial"><button class="tablinks" onclick="openCity(event, 'Unofficial', '84%')">Save and Proceed</button></a>

		</div>
	</div>
</div>

<div id="Unofficial" class="tabcontent">
	<div class="row justify-content-center">
		<div class="col-11 col-lg-8">
			<p align="middle"> Step 5/5</p>
			<h3 align="middle"> Unofficial Events</h3>
			<p align="middle">You can register for unofficial events here as they are announced. You can do this later independent of your registration and will receive an email whenever a new event is available. The following events are available right now:</p>
			<div class="wrapper">
			<table>
				<tr>
					<th class="tg-s268"> Event </th>
					<th class="tg-s268"> Description </th>
					<th class="tg-s268"> Register Link </th>
				</tr>
				<tr>
					<td class="tg-s268"> Worlds of Wonder water park trip </td>
					<td class="tg-s268"> To unwind after the competition, we are organizing an official trip on Monday, 15th April after the competition to Worlds of Wonder water park. </td>
					<td class="tg-s268"> <a href="https://goo.gl/forms/E5NBXfad4BnO9H262" target="about_blank"> Link </a> </td>
				</tr>
                                <tr>
                                        <td class="tg-s268"> States Cup </td>
                                        <td class="tg-s268"> Inspired by the success of Nations Cup at World Championship 2017, teams from states all over India will compete in a knockout format. You can apply in teams of 3. Please refer to the registration link for detailed instructions.
 </td>
                                        <td class="tg-s268"> <a href="https://goo.gl/forms/oO81QuxLS8KSFEqj1" target="about_blank"> Link </a> </td>
                                </tr>

			</table>
		</div>

		</div>
	</div>

	<div class="wrapper">
		<div class="tab">
			<a href="#Accomodation"><button class="tablinks" onclick="openCity(event, 'Accommodation', '80%')">Previous</button></a>
			<a id="register-checkout"><button class="tablinks">Checkout</button></a>
		</div>
	</div>
</div>
<div id="cart-total">
Cart Total : ₹0
</div>


</div>








<script src="https://js.instamojo.com/v1/checkout.js"></script>

<script>

function updateFee(){
var netFee=getEventFee()+getTravelFee()+getMerchFee()+getAccoFee();


$('#cart-total')[0].innerHTML="Cart Total : ₹"+netFee;
}

function getEventFee(){
var baseFee = 300;
var current_time = Date.now();
if(current_time > 1548959400000) {
   if(current_time < 1551378600000) {
    baseFee = 350;
	} else {
    baseFee = 400;
    }
}
var count_events = 0;
var event_total_reg_fee = 0;
var already_registered_flag = false;
for(var i = 1; i <= 18; i++){
   if(document.getElementById("cb" + i).checked){
      count_events++;
   } else if(document.getElementById("cb" + i).disabled){
	  already_registered_flag = true;
	}
}
if(count_events == 0 || already_registered_flag == true){
	baseFee = 0;
}
event_total_reg_fee = baseFee + count_events*50;

return event_total_reg_fee;
}

function getTravelFee(){
var total_people = 0;
for(var i = 19; i <= 26; i++) {
   if(document.getElementById("cb" + i).checked && document.getElementById("cbcb" + i).value !== "") {
	total_people = total_people + parseInt(document.getElementById("cbcb" + i).value);
   }
}
return total_people*100;
}

function getMerchFee(){
	var merch_fee=0;
	if(document.getElementById("cbcb27").value!=="" && document.getElementById("cbcb28").value !== "" && document.getElementById("cbcb28").value !== "0") {
		merch_fee = merch_fee + 499*parseInt(document.getElementById("cbcb28").value);
	}
	if(document.getElementById("cbcb57").value!=="" && document.getElementById("cbcb58").value !== "" && document.getElementById("cbcb58").value !== "0") {
		merch_fee = merch_fee + 499*parseInt(document.getElementById("cbcb58").value);
	}
	if(document.getElementById("cbcb59").value!=="" && document.getElementById("cbcb60").value !== "" && document.getElementById("cbcb60").value !== "0") {
		merch_fee = merch_fee + 499*parseInt(document.getElementById("cbcb60").value);
	}
	if(document.getElementById("cbcb29").value!=="" && document.getElementById("cbcb29").value!=="0"){
		merch_fee = merch_fee + 299*parseInt(document.getElementById("cbcb29").value);
	}
	if(document.getElementById("cbcb30").value!=="" && document.getElementById("cbcb30").value!=="0"){
		merch_fee = merch_fee + 99*parseInt(document.getElementById("cbcb30").value);
	}
	if(document.getElementById("cbcb31").value!=="" && document.getElementById("cbcb31").value!=="0"){
		merch_fee = merch_fee + 249*parseInt(document.getElementById("cbcb31").value);
	}
	if(document.getElementById("cbcb32").value!=="" && document.getElementById("cbcb32").value!=="0"){
		merch_fee = merch_fee + 49*parseInt(document.getElementById("cbcb32").value);
	}
	if(document.getElementById("cbcb33").value!=="" && document.getElementById("cbcb32").value!=="0"){
		merch_fee = merch_fee + 99*parseInt(document.getElementById("cbcb33").value);
	}
	if(document.getElementById("cbcb34").value!=="" && document.getElementById("cbcb34").value!=="0"){
		merch_fee = merch_fee + 49*parseInt(document.getElementById("cbcb34").value);
	}
	if(document.getElementById("cbcb35").value!=="" && document.getElementById("cbcb35").value!=="0"){
		merch_fee = merch_fee + 199*parseInt(document.getElementById("cbcb35").value);
	}
	if(document.getElementById("cbcb36").value!=="" && document.getElementById("cbcb36").value!=="0"){
		merch_fee = merch_fee + 19*parseInt(document.getElementById("cbcb36").value);
	}
	if(document.getElementById("cbcb37").value!=="" && document.getElementById("cbcb37").value!=="0"){
		merch_fee = merch_fee + 19*parseInt(document.getElementById("cbcb37").value);
	}
	if(document.getElementById("cbcb38").value!=="" && document.getElementById("cbcb38").value!=="0"){
		merch_fee = merch_fee + 399*parseInt(document.getElementById("cbcb38").value);
	}
	if(document.getElementById("cbcb69").value!=="" && document.getElementById("cbcb69").value!=="0"){
		merch_fee = merch_fee + 699*parseInt(document.getElementById("cbcb69").value);
	}
	if(document.getElementById("cbcb70").value!=="" && document.getElementById("cbcb70").value!=="0"){
		merch_fee = merch_fee + 449*parseInt(document.getElementById("cbcb70").value);
	}
	return merch_fee;
}

function getAccoFee(){
	var acco_fee=0;
	if(document.getElementById("cb40a").value!=="" && document.getElementById("cb40b").value !== "" && document.getElementById("cbcb40").value !== "") {
		var diff=parseInt(document.getElementById("cb40b").value)-parseInt(document.getElementById("cb40a").value);
		if (diff>0){
		acco_fee = acco_fee + 3600*parseInt(document.getElementById("cbcb40").value)*(parseInt(document.getElementById("cb40b").value)-parseInt(document.getElementById("cb40a").value));
	}
	}
	if(document.getElementById("cb41a").value!=="" && document.getElementById("cb41b").value !== "" && document.getElementById("cbcb41").value !== "") {
			var diff=parseInt(document.getElementById("cb41b").value)-parseInt(document.getElementById("cb41a").value);
		if (diff>0){
		acco_fee = acco_fee + 2700*parseInt(document.getElementById("cbcb41").value)*(parseInt(document.getElementById("cb41b").value)-parseInt(document.getElementById("cb41a").value));
	}
	}
	if(document.getElementById("cb42a").value!=="" && document.getElementById("cb42b").value !== "" && document.getElementById("cbcb42").value !== "") {
		var diff=parseInt(document.getElementById("cb42b").value)-parseInt(document.getElementById("cb42a").value);
		if (diff>0){
		acco_fee = acco_fee + 2000*parseInt(document.getElementById("cbcb42").value)*(parseInt(document.getElementById("cb42b").value)-parseInt(document.getElementById("cb42a").value));
	}
	}
	if(document.getElementById("cb43a").value!=="" && document.getElementById("cb43b").value !== "" && document.getElementById("cbcb43").value !== "") {
			var diff=parseInt(document.getElementById("cb43b").value)-parseInt(document.getElementById("cb43a").value);
		if (diff>0){
		acco_fee = acco_fee + 500*parseInt(document.getElementById("cbcb43").value)*(parseInt(document.getElementById("cb43b").value)-parseInt(document.getElementById("cb43a").value));
	}
	}
	if(document.getElementById("cb44a").value!=="" && document.getElementById("cb44b").value !== "" && document.getElementById("cbcb44").value !== "") {
			var diff=parseInt(document.getElementById("cb44b").value)-parseInt(document.getElementById("cb44a").value);
		if (diff>0){
		acco_fee = acco_fee + 500*parseInt(document.getElementById("cbcb44").value)*(parseInt(document.getElementById("cb44b").value)-parseInt(document.getElementById("cb44a").value));
	}
}
	return acco_fee;
}



	function openCity(evt, tabName, progress) {
               
		if(tabName=='Merch'){
			var flagAlert1 = true, flagAlert2 = true;
			for(var i = 19; i <= 26; i++) {
				if((document.getElementById("cb" + i).checked && document.getElementById("cbcb" + i).value === "")) {
					flagAlert1 = false; break;
				} else if(!document.getElementById("cb" + i).checked && document.getElementById("cbcb" + i).value !== "") {
					flagAlert2 = false; break;
				}
			}
			if(flagAlert1==false) {
				alert("You haven not selected the number of people.");
				return false;
			} else if(flagAlert2 == false) {
				alert("Please select the slot you want to travel in.");
				return false;
			} else {
                               document.getElementsByClassName("progress-bar")[0].style.width = progress;
                        }

		}
		if(tabName=='Accommodation'){
			var flagAlert= true;
				if(document.getElementById("cbcb28").value !== "" && document.getElementById("cbcb28").value !== "0") {
					if(document.getElementById("cbcb27").value === ""){
						flagAlert=false;	
					}
				} 
				if(document.getElementById("cbcb58").value !== "" && document.getElementById("cbcb58").value !== "0") {
					if(document.getElementById("cbcb57").value === ""){
						flagAlert=false;	
					}
				} 
				if(document.getElementById("cbcb60").value !== "" && document.getElementById("cbcb60").value !== "0") {
					if(document.getElementById("cbcb59").value === ""){
						flagAlert=false;	
					}
				} 
			if(flagAlert==false) {
				alert("You haven not selected your T-shirt size");
				return false;
			} else {
                           document.getElementsByClassName("progress-bar")[0].style.width = progress;
                        } 

		}
		if(tabName=='Unofficial'){
			var flagAlert1= true;
			var flagAlert2= true;	
			var flagAlert3 = true;
			if (document.getElementById('check1').checked==false){
				flagAlert3=false;
			}		
			for(var i = 40; i <= 44; i++) {
				if(document.getElementById("cbcb"+i).value !== "" && document.getElementById("cbcb"+i).value !== "0" && document.getElementById("cb"+i+"a").value !== "" && document.getElementById("cb"+i+"b").value !== "" ) {
						if (document.getElementById("cb"+i+"a").value>=document.getElementById("cb"+i+"b").value){
						flagAlert1=false;								
					}
				} 
				if(document.getElementById("cbcb"+i).value !== "" && document.getElementById("cbcb"+i).value !== "0"){
						if (document.getElementById("cb"+i+"a").value=="" || document.getElementById("cb"+i+"b").value==""){
						flagAlert2=false;								
					}
				} 
				}
			if(flagAlert3==false) {
				alert("You must agree to terms and conditions to select accommodation.");
				return false;
			} 
			if(flagAlert1==false) {
				alert("Check-out date must be after Check-in date");
				return false;
			} 
			else if(flagAlert2==false) {
				alert("Please select a valid check-in and check-out date");
				return false;
			} else {
                           document.getElementsByClassName("progress-bar")[0].style.width = progress;
                        } 
                    }
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		//tablinks = document.getElementsByClassName("tablinks");
		//for (i = 0; i < tablinks.length; i++) {
		//	tablinks[i].className = tablinks[i].className.replace(" active", "");
		//}
		document.getElementById(tabName).style.display = "block";
	//	$('#default'+tabName)[0].className+=" active";
	updateFee();
	}

	function skipCity(evt, tabName, progress) {
document.getElementsByClassName("progress-bar")[0].style.width = progress;

		if (tabName=="Travel"){
			for(var i = 1; i <= 18; i++) {
				document.getElementById("cb" + i).checked = false;
			}
		}

		if(tabName=='Merch'){

		//For travel page
		for(var i = 19; i <= 26; i++){
			document.getElementById("cb" + i).checked = false;
			document.getElementById("cbcb" + i).value = "";
			}
		}
		if(tabName=='Accommodation'){

		//For travel page
		for(var i = 27; i <=38; i++){
			document.getElementById("cbcb" + i).value = "";
		}
		for(var i = 57; i <=60; i++){
			document.getElementById("cbcb" + i).value = "";
		}
		for(var i = 69; i <=70; i++){
			document.getElementById("cbcb" + i).value = "";
		}

}

		if(tabName=='Unofficial'){

		//For acco page
		for(var i = 40; i <=44; i++){
			document.getElementById("cbcb" + i).value = "";
			document.getElementById("cb" + i + "a").value = "";
			document.getElementById("cb" + i + "b").value = "";
		}
}



var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
	tabcontent[i].style.display = "none";
}
//tablinks = document.getElementsByClassName("tablinks");
//for (i = 0; i < tablinks.length; i++) {
//	tablinks[i].className = tablinks[i].className.replace(" active", "");
//}
document.getElementById(tabName).style.display = "block";
//$('#default'+tabName)[0].className+=" active";
updateFee();
}

document.getElementById('Events').style.display = "block";
//$("#defaultEvents")[0].className+=" active";


$(".travel-selector-class").change(function() {
	document.getElementById("cb" + this.id).value = "";
});


$("#register-checkout").click(function() {
 //       alert("hello");
	var cart_total=getEventFee()+getTravelFee()+getMerchFee()+getAccoFee();
	if (cart_total==0){
	alert("Please add something to your cart before checkout");
	return false;
	}
	var travel = {};
	for(var i = 19; i <= 26; i++){
		if(document.getElementById("cb" + i).checked){
			travel["cb" + i] = document.getElementById("cbcb" + i).value;
		}
	}

	var events = {};
	for(var i = 1; i <= 18; i++) {
		events["cb" + i] = 0;
		if(document.getElementById("cb" + i).checked) {
			events["cb" + i] = 1;
		}
	}

	var merch = {};
	if(document.getElementById("cbcb27").value!=="" && document.getElementById("cbcb28").value !== "" && document.getElementById("cbcb28").value !== "0") {
		merch['cbcb28-'+document.getElementById("cbcb27").value]=parseInt(document.getElementById("cbcb28").value);
	}
	for (var i=29;i<=38;i++){
		if(document.getElementById("cbcb"+i).value!=="" && document.getElementById("cbcb"+i).value!=="0"){
			merch['cbcb'+i]= parseInt(document.getElementById("cbcb"+i).value);
		}

	}
	if(document.getElementById("cbcb57").value!=="" && document.getElementById("cbcb58").value !== "" && document.getElementById("cbcb58").value !== "0") {
		merch['cbcb58-'+document.getElementById("cbcb57").value]=parseInt(document.getElementById("cbcb58").value);
	}
	if(document.getElementById("cbcb59").value!=="" && document.getElementById("cbcb60").value !== "" && document.getElementById("cbcb60").value !== "0") {
		merch['cbcb60-'+document.getElementById("cbcb59").value]=parseInt(document.getElementById("cbcb60").value);
	}
	for (var i=69;i<=70;i++){
		if(document.getElementById("cbcb"+i).value!=="" && document.getElementById("cbcb"+i).value!=="0"){
			merch['cbcb'+i]= parseInt(document.getElementById("cbcb"+i).value);
		}

	}

	var acco = {};
	for (var i=40;i<=44;i++){
	if(document.getElementById("cbcb" +i).value!=="" && document.getElementById("cbcb" +i).value!=="0" && document.getElementById("cb"+i+"a").value !== "" && document.getElementById("cb"+i+"b").value !== "") {
		acco['cbcb'+i]=[parseInt(document.getElementById("cb"+i+"a").value),parseInt(document.getElementById("cb"+i+"b").value),parseInt(document.getElementById("cbcb"+i).value)];
	}
	}


	$.post( "register.php",{travel: travel, events: events, merch: merch, acco : acco}, function( script ) {
		var scriptTag = $(script).text();
		eval(scriptTag);
	});
});
</script>


</section>
</section>
</main>
