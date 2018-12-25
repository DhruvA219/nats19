<?php
include('../header.php')
?>
  <main id="main">
    <!--==========================
      Venue Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Transport</h2>
          <p>Please select a starting point to find out transport options.</p>
        </div>

      <ul class="nav nav-tabs" role="tablist">

        <li class="nav-item">
          <a class="nav-link active" href="#a2" role="tab" data-toggle="tab">Airport Temnial 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#a3" role="tab" data-toggle="tab">Airport Temnial 2/3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#a4" role="tab" data-toggle="tab">Nizamudin Railway Station</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#a5" role="tab" data-toggle="tab">New Delhi Railway Station</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#a6" role="tab" data-toggle="tab">Dadri Railway Station</a>
        </li>
      </ul>

        <div role="tabpanel" class="col-lg-12  tab-pane fade show active" id="a2">
          <div class="row no-gutters">
            <div class="col-lg-12 venue-info">
              <div class="row justify-content-center">
                <div class="col-11 col-lg-8">
                  <h3 align="middle">Metro and Bus Shuttle</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-12 venue-map">
              <iframe src="https://www.google.com/maps/embed?pb=!4v1545398527734!6m8!1m7!1sCAoSLEFGMVFpcE5rTGZVcGVBcko4Q2xQbGFieWtleTQ4WTFweHNzbDl3SDJXTjgx!2m2!1d28.5267298!2d77.575363!3f0!4f0!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen align="middle"></iframe>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="col-lg-9  tab-pane fade" id="a3">
          <p>Airport Temnial 2/3</p>
        </div>
        <div role="tabpanel" class="col-lg-9  tab-pane fade" id="a4">
          <p>Nizamudin Railway Station</p>
        </div>
        <div role="tabpanel" class="col-lg-9  tab-pane fade" id="a5">
          <p>New Delhi Railway Station</p>
        </div>
        <div role="tabpanel" class="col-lg-9  tab-pane fade" id="a6">
          <p>Dadri Railway Station</p>
        </div>
      </div>
    </div>


</section>
  </main>

<?php
include('../footer.php')
?>