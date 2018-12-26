<?php
session_start();

if(!isset($_SESSION['email'])) {
	header('location:login-to-continue.php');
}


include('../header.php');
?>


<main id="main">
		<!--==========================
	==========================

	<!-- Buy Ticket Section -->

	<section id="buy-tickets" class="section-with-bg wow fadeInUp">
		<div class="container">
			<div class="section-header">
				<h2>My Nats</h2>
					<div class>
					</div>

				<p>       
				<?php echo "Welcome ". strtok($_SESSION['name'], ' ').; ?>. You can see all your registration and accessories details here. Your groups will be available here by 5 April, 2019. <p> 
			</div>


		</div>








</section>
</main>




<?php
include('../footer.php')
?>
