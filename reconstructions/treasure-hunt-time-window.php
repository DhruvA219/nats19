<?php
include('../header.php')
?>

  <main id="main">

<section id="schedule" class="section-with-bg">
    <div class="container wow fadeInUp">
                <div class="section-header">
        <div class="wrapper">
                        <h2> Treasure Hunt </h2>
			<p align="middle"> The Treasure Hunt will start on Friday, 22nd February 00:00 IST and will end on Sunday, 24th February 23:59 IST. </p>

<?php 

$current_time=time();

 $basetime_2=1551033000;
 if ($current_time>$basetime_2){
   echo '<p align="middle"> Visit the <a href="https://nats19.in/leaderboard"><u>leaderboard</u>.</a> </p>';
 }
?>

        </div>
                </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
</section>
</main>

<?php
include('../footer.php')
?>
