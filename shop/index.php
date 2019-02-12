<?php
session_start();



include('../header.php');

?>
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
				<h2>Shop</h2>
				<div class>
				</div>

				<p> You can buy all the cool stuff on the <a href="https://nats19.in/register" target="about_blank">register page<a> after login. <p>
				</div>

				<section id="Regforevent" class="section-with-bg">
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
							<img src="../img/merchandise/tshirt.png" alt="">
							<h3>T-shirt</h3>
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
		for(var i = 27; i <=37; i++){
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
	for (var i=29;i<=37;i++){
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

<?php
include('../footer.php');
?>
