<?php
$start = microtime(true);
include('../header.php');
$time_elapsed_secs = microtime(true) - $start;
$page_url=$_SERVER['PHP_SELF'];
$now = new DateTime();
$date=$now->format('Y-m-d');
$get_page_visit_sql = "select * from `pageviews` where page='".$page_url."' and view_date='".$date."'";
$page_result=$conn->query($get_page_visit_sql);
$conn = new mysqli("localhost", "root", "n@ts2019", "nats19");
if(mysqli_num_rows($page_result)>0){
            $pageview_update_sql = "update `pageviews` SET count=count+1 where page='".$page_url."' and view_date='".$date."'";
          $conn->query($pageview_update_sql);

}
else{
            $pageview_insert_sql = "insert into `pageviews` (`page`,`view_date`,`count` ) VALUES ('".$page_url."','".$date."',1)";
          $conn->query($pageview_insert_sql);
}




?>

  <main id="main">
    <!--==========================
      Sponsors Section
    ============================-->
    <section id="sponsors" class="section-with-bg wow fadeInUp">
         <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
<?php
?>
        </div>
             <center><p> Coming soon! </p> </center>
    <!--

        <div class="row no-gutters sponsors-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../img/sponsors/1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../img/sponsors/2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../img/sponsors/3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../img/sponsors/4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../img/sponsors/5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../img/sponsors/6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../img/sponsors/7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../img/sponsors/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div> -->

    </section>
  </main>

<?php
include('../footer.php')
?>