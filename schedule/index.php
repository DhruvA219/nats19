<?php
include('../header.php')
?>

  <main id="main">
    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">12 April</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">13 April</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">14 April</a>
          </li>
        </ul>



        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
            <div class="wrapper">
            <table class = "schdule-table-striped">
              <colgroup>
                <col class="grey" />
                <col class="red" />
                <col class="yellow" />
                <col class="green" />
                <col class="purple" />
                <col class="white" />
              </colgroup>
              <thead>
                <tr>
                  <th> Time </th>
                  <th> Stage 1 </th>
                  <th> Stage 2 </th>
                  <th> Stage 3 </th>
                  <th> Stage 4 </th>
                  <th> BLD Room </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td > 8:00 </td>
                  <td colspan="5" rowspan="4" bgcolor="#ec407a"> <img src="../img/events/breakfast.png" alt="LOGO" class="center"> Breakfast </td>
                </tr>
                <tr>
                  <td > 8:15 </td>
                </tr>
                <tr>
                  <td > 8:30 </td>
                </tr>
                <tr>
                  <td > 8:45 </td>
                </tr>
                <tr>
                  <td > 9:00 </td>
                </tr>
                <tr>
                  <td > 9:15 </td>
                  <td rowspan="4" bgcolor="#4dd0e1">
                    <img src="../img/events/CLOCK.png" alt="  LOGO" class="center">
                    Clock Combined Round 1 </td>
                    <td rowspan="4" bgcolor="#4dd0e1">
                      <img src="../img/events/CLOCK.png" alt="  LOGO" class="center"> Clock Combined Round 1 </td>
                      <td rowspan="2" bgcolor="#4dd0e1">  <img src="../img/events/CLOCK.png" alt="  LOGO" class="center"> Clock Combined Round 1 </td>
                    </tr>
                    <td > 9:30 </td>
                  </tr>
                  <tr>
                    <td > 9:45 </td>
                    <td rowspan="6" bgcolor="#ef5350">
                      <img src="../img/events/7x7.png" alt="  LOGO" class="center">
                      7x7x7 Combined Round 1</td>
                      <td rowspan="6" bgcolor="#ef5350">
                        <img src="../img/events/7x7.png" alt="  LOGO" class="center">
                        7x7x7 Combined Round 1</td>
                      </tr>
                      <tr>
                        <td > 10:00 </td>
                      </tr>
                      <tr>
                        <td > 10:15 </td>
                        <td rowspan="6" bgcolor="#90a4ae">
                          <img src="../img/events/MINX.png" alt="LOGO" class="center">
                          Megaminx Combined Round 1</td>
                          <td rowspan="6" bgcolor="#90a4ae">
                            <img src="../img/events/MINX.png" alt=" LOGO" class="center">
                            Megaminx Combined Round 1</td>

                              <tr>
                                <td > 10:30 </td>
                              </tr>
                              <tr>
                                <td > 10:45 </td>
                              </tr>
                              <tr>
                                <td > 11:00 </td>
                              </tr>
                              <tr>
                                <td > 11:15 </td>
                                <td rowspan="2" bgcolor="#90a4ae">
                                  <img src="../img/events/MINX.png" alt="LOGO" class="center">
                                  Megaminx Combined Round 1</td>
                                  <td rowspan="2" bgcolor="#90a4ae">
                                    <img src="../img/events/MINX.png" alt="LOGO" class="center">
                                    Megaminx Combined Round 1</td>
                                    <td rowspan="3" bgcolor="#b0bec5">
                                      <img src="../img/events/4BLD.png" alt="LOGO" class="center">
                                      4x4x4 Blindfolded final</td>
                                    </tr>
                                    <tr>
                                      <td > 11:30 </td>
                                    </tr>
                                    <tr>
                                      <td > 11:45 </td>
                                      <td rowspan="4" bgcolor="#8d6e63">
                                        <img src="../img/events/6x6.png" alt="LOGO" class="center">
                                        6x6x6 Combined Round 1</td>
                                        <td rowspan="4" bgcolor="#8d6e63">
                                          <img src="../img/events/6x6.png" alt="LOGO" class="center">
                                          6x6x6 Combined Round 1</td>
                                          <td rowspan="2" bgcolor="#8d6e63">
                                            <img src="../img/events/6x6.png" alt="LOGO" class="center">
                                            6x6x6 Combined Round 1</td>
                                            <td rowspan="2" bgcolor="#8d6e63">
                                              <img src="../img/events/6x6.png" alt="LOGO" class="center">
                                              6x6x6 Combined Round 1</td>
                                            </tr>
                                            <tr>
                                              <td > 12:00 </td>
                                              <td rowspan="4" bgcolor="#64b5f6">
                                                <img src="../img/events/MBLD.png" alt="LOGO" class="center">
                                              3x3x3 Multi-Blind Attempt 1 Cube Submission</td>
                                              </tr>

                                            <tr>
                                              <td > 12:15 </td>
                                              <td rowspan="4" bgcolor="#757575">
                                                <img src="../img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Combined Round 1</td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="../img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Combined Round 1</td>
                                            </tr>
                                            <tr>
                                              <td > 12:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 12:45 </td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="../img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Combined Round 1</td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="../img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Combined Round 1</td>
                                            </tr>
                                            <tr>
                                              <td > 13:00 </td>
                                            </tr>
                                            <tr>
                                              <td > 13:15 </td>
                                                  <td colspan="5" rowspan="3" bgcolor="#009688"> <img src="../img/events/lunch.png" alt="LOGO" class="center"> Lunch </td>
                                            </tr>
                                            <tr>
                                              <td > 13:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 13:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 14:00 </td>
                                              <td rowspan="8" bgcolor="#90a4ae">
                                                <img src="../img/events/5x5.png" alt="LOGO" class="center">
                                              5x5x5 Cube Combined Round 1</td>
                                              <td rowspan="8" bgcolor="#90a4ae">
                                                <img src="../img/events/5x5.png" alt="LOGO" class="center">
                                              5x5x5 Cube Combined Round 1</td>
                                              <td rowspan="4" bgcolor="#f6f7fd">
                                                </td>
                                              <td rowspan="4" bgcolor="#f6f7fd">
                                                </td>
                                                <td rowspan="4" bgcolor="#64b5f6">
                                                  <img src="../img/events/MBLD.png" alt="LOGO" class="center">
                                                3x3x3 MultiBlind Attempt 1</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                              <td > 14:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 14:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 14:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 15:00 </td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="../img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Final</td>
                                              <td rowspan="2" bgcolor="#757575">
                                                <img src="../img/events/sq1.png" alt="LOGO" class="center">
                                              Square 1 Final</td>
                                            </tr>
                                            <tr>
                                              <td > 15:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 15:30 </td>
                                              <td rowspan="4" bgcolor="#ffa726">
                                              <img src="../img/events/FEET.png" alt="LOGO" class="center">
                                            3x3x3 with Feet Combined Round 1</td>
                                            <td rowspan="4" bgcolor="#ffa726">
                                            <img src="../img/events/FEET.png" alt="LOGO" class="center">
                                          3x3x3 with Feet Combined Round 1</td>
                                            </tr>
                                            <tr>
                                              <td > 15:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 16:00 </td>
                                            </tr>
                                            <tr>
                                              <td > 16:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 16:30 </td>
                                              <td rowspan="2" bgcolor="#f6f7fd">
                                                </td>
                                              <td rowspan="2" bgcolor="#f6f7fd">
                                                </td>
                                              <td rowspan="2" bgcolor="#ffa726">
                                              <img src="../img/events/FEET.png" alt="LOGO" class="center">
                                            3x3x3 with Feet Final</td>
                                            <td rowspan="2" bgcolor="#ffa726">
                                            <img src="../img/events/FEET.png" alt="LOGO" class="center">
                                          3x3x3 with Feet Final</td>
                                            </tr>
                                            <tr>
                                              <td > 16:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 17:00 </td>
                                              <td rowspan="4" bgcolor="#1565c0">
                                              <img src="../img/events/FMC.png" alt="LOGO" class="center">
                                            3x3x3 Fewest Moves Attempt 1</td>
                                            <td rowspan="4" bgcolor="#1565c0">
                                            <img src="../img/events/FMC.png" alt="LOGO" class="center">
                                          3x3x3 Fewest Moves Attempt 1</td>
                                          <td rowspan="4" bgcolor="#1565c0">
                                          <img src="../img/events/FMC.png" alt="LOGO" class="center">
                                        3x3x3 Fewest Moves Attempt 1</td>
                                        <td rowspan="4" bgcolor="#1565c0">
                                        <img src="../img/events/FMC.png" alt="LOGO" class="center">
                                      3x3x3 Fewest Moves Attempt 1</td>
                                            </tr>
                                            <tr>
                                              <td > 17:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 17:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 17:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 18:00 </td>
                                              <td rowspan="6" bgcolor="#f6f7fd">
                                                </td>
                                              <td rowspan="2" bgcolor="#90a4ae">
                                                <img src="../img/events/MINX.png" alt="LOGO" class="center">
                                                Megaminx Final</td>
                                                <td rowspan="2" bgcolor="#90a4ae">
                                                  <img src="../img/events/MINX.png" alt="LOGO" class="center">
                                                  Megaminx Final</td>
                                            </tr>
                                            <tr>
                                              <td > 18:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 18:30 </td>
                                              <td rowspan="2" bgcolor="#ffe082">

                                                Unofficial Event - Cube-o-mania</td>
                                            </tr>
                                            <tr>
                                              <td > 18:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 19:00 </td>
                                              <td rowspan="2" bgcolor="#90caf9">

                                                Seminars</td>
                                            </tr>
                                            <tr>
                                              <td > 19:15 </td>
                                            </tr>
                                            <tr>
                                              <td > 19:30 </td>
                                            </tr>
                                            <tr>
                                              <td > 19:45 </td>
                                            </tr>
                                            <tr>
                                              <td > 20:00 </td>
                                            </tr>
                                          </tbody>

                                        </table>
                                    </div>



                                      </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
            <div class="wrapper">  
            <table class = "schdule-table-striped">
                <colgroup>
                  <col class="grey" />
                  <col class="red" />
                  <col class="yellow" />
                  <col class="green" />
                  <col class="purple" />
                  <col class="white" />
                </colgroup>
                <thead>
                <tr>
                  <th class="tg-xldj">Time</th>
                  <th class="tg-0pky">Stage 1</th>
                  <th class="tg-0pky">Stage 2</th>
                  <th class="tg-0pky">Stage 3</th>
                  <th class="tg-0pky">Stage 4</th>
                  <th class="tg-0pky">BLD Room</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="tg-0pky">08:00</td>
                  <td class="tg-0pky" colspan="5" rowspan="5" bgcolor="#ec407a"> <img src="../img/events/breakfast.png" alt="LOGO" class="center"> Breakfast</td>
                </tr>
                <tr>
                  <td class="tg-0pky">08:15</td>
                </tr>
                <tr>
                  <td class="tg-0pky">08:30</td>
                </tr>
                <tr>
                  <td class="tg-0pky">08:30</td>
                </tr>
                <tr>
                  <td class="tg-0lax">08:45</td>
                </tr>
                <tr>
                  <td class="tg-0pky">09:00</td>

                </tr>
                <tr>
                  <td class="tg-0pky">09:15</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#1565c0"> <img src="../img/events/FMC.png" alt="LOGO" class="center"> 3x3x3 Fewest Moves Attempt 2</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#1565c0"> <img src="../img/events/FMC.png" alt="LOGO" class="center"> 3x3x3 Fewest Moves Attempt 2</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#1565c0"> <img src="../img/events/FMC.png" alt="LOGO" class="center"> 3x3x3 Fewest Moves Attempt 2</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#1565c0"> <img src="../img/events/FMC.png" alt="LOGO" class="center">   3x3x3 Fewest Moves Attempt 2</td>

                </tr>
                <tr>
                  <td class="tg-0pky">09:30</td>

                </tr>
                <tr>
                  <td class="tg-0pky">09:45</td>

                </tr>
                <tr>
                  <td class="tg-0pky">10:00</td>

                </tr>
                <tr>
                  <td class="tg-0pky">10:15</td>
                  <td class="tg-0pky" colspan="5" rowspan="2" bgcolor="#546e7a">Competitor Tutorial</td>
                </tr>
                <tr>
                  <td class="tg-0pky">10:30</td>
                </tr>
                <tr>
                  <td class="tg-0pky">10:45</td>
                  <td class="tg-0pky" rowspan="8" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 1</td>
                  <td class="tg-0pky" rowspan="8" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 1</td>
                  <td class="tg-0pky" rowspan="8" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 1</td>
                  <td class="tg-0pky" rowspan="8" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 1</td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#aed581"> <img src="../img/events/3BLD.png" alt="LOGO" class="center"> 3x3x3 Blindfoled Round 1</td>
                </tr>
                <tr>
                  <td class="tg-0pky">11:00</td>
                </tr>
                <tr>
                  <td class="tg-0pky">11:15</td>
                </tr>
                <tr>
                  <td class="tg-0pky">11:30</td>
                </tr>
                <tr>
                  <td class="tg-0pky">11:45</td>
                </tr>
                <tr>
                  <td class="tg-0pky">12:00</td>

                </tr>
                <tr>
                  <td class="tg-0pky">12:15</td>

                </tr>
                <tr>
                  <td class="tg-0pky">12:30</td>

                </tr>
                <tr>
                  <td class="tg-0pky">12:45</td>
                  <td class="tg-0pky" rowspan="3" bgcolor="#f06292"> <img src="../img/events/skewb.png" alt="LOGO" class="center"> Skewb Round 1</td>
                  <td class="tg-0pky" rowspan="3" bgcolor="#f06292"> <img src="../img/events/skewb.png" alt="LOGO" class="center"> Skewb Round 1</td>
                  <td class="tg-0pky" rowspan="3" bgcolor="#f06292"> <img src="../img/events/skewb.png" alt="LOGO" class="center"> Skewb Round 1</td>
                  <td class="tg-0pky" rowspan="3" bgcolor="#f06292"> <img src="../img/events/skewb.png" alt="LOGO" class="center"> Skewb Round 1</td>

                </tr>
                <tr>
                  <td class="tg-0pky">13:00</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#aed581"><img src="../img/events/3BLD.png" alt="LOGO" class="center"> 3x3x3 Blindfoled Final</td>
                </tr>
                <tr>
                  <td class="tg-0pky">13:15</td>
                </tr>
                <tr>
                  <td class="tg-0pky">13:30</td>
                  <td class="tg-0pky" colspan="5" rowspan="3" bgcolor="#009688"> <img src="../img/events/lunch.png" alt="LOGO" class="center"> Lunch</td>
                </tr>
                <tr>
                  <td class="tg-0pky">13:45</td>
                </tr>
                <tr>
                  <td class="tg-0pky">14:00</td>
                </tr>
                <tr>
                  <td class="tg-0pky">14:15</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Round 1</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Round 1</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Round 1</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Round 1</td>
                  <td class="tg-0pky" bgcolor="#64b5f6"><img src="../img/events/MBLD.png" alt="LOGO" class="center"> 3x3x3 Multi-Blind Attempt 2 Cube Submission</td>
                </tr>
                <tr>
                  <td class="tg-0pky">14:30</td>

                </tr>
                <tr>
                  <td class="tg-0pky">14:45</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#6a1b9a"> <img src="../img/events/5BLD.png" alt="LOGO" class="center"> 5x5x5 Blindfoled Final</td>
                </tr>
                <tr>
                  <td class="tg-0pky">15:00</td>
                </tr>
                <tr>
                  <td class="tg-0pky">15:15</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Round 1</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Round 1</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Round 1</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Round 1</td>
                </tr>
                <tr>
                  <td class="tg-0pky">15:30</td>
                </tr>
                <tr>
                  <td class="tg-0pky">15:45</td>

                </tr>
                <tr>
                  <td class="tg-0pky">16:00</td>

                </tr>
                <tr>
                  <td class="tg-0pky">16:15</td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#e91e63"> <img src="../img/events/4x4.png" alt="LOGO" class="center"> 4x4x4 Cube Combined Round 1</td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#e91e63"> <img src="../img/events/4x4.png" alt="LOGO" class="center"> 4x4x4 Cube Combined Round 1</td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#e91e63"> <img src="../img/events/4x4.png" alt="LOGO" class="center"> 4x4x4 Cube Combined Round 1</td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#e91e63"> <img src="../img/events/4x4.png" alt="LOGO" class="center"> 4x4x4 Cube Combined Round 1</td>

                </tr>
                <tr>
                  <td class="tg-0pky">16:30</td>

                </tr>
                <tr>
                  <td class="tg-0pky">16:45</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#64b5f6"> <img src="../img/events/MBLD.png" alt="LOGO" class="center"> 3x3x3 Multi-Blind Attempt 2</td>
                </tr>
                <tr>
                  <td class="tg-0pky">17:00</td>
                </tr>
                <tr>
                  <td class="tg-0pky">17:15</td>
                </tr>
                <tr>
                  <td class="tg-0pky">17:30</td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#d1c4e9"> <img src="../img/events/3OH.png" alt="LOGO" class="center"> 3x3x3 One-Handed Combined Round 1</td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#d1c4e9"> <img src="../img/events/3OH.png" alt="LOGO" class="center"> 3x3x3 One-Handed Combined Round 1</td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#d1c4e9"> <img src="../img/events/3OH.png" alt="LOGO" class="center"> 3x3x3 One-Handed Combined Round 1</td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#d1c4e9"> <img src="../img/events/3OH.png" alt="LOGO" class="center"> 3x3x3 One-Handed Combined Round 1</td>
                </tr>
                <tr>
                  <td class="tg-0pky">17:45</td>

                </tr>
                <tr>
                  <td class="tg-0pky">18:00</td>

                </tr>
                <tr>
                  <td class="tg-0pky">18:15</td>

                </tr>
                <tr>
                  <td class="tg-0pky">18:30</td>

                </tr>
                <tr>
                  <td class="tg-0pky">18:45</td>
                  <td class="tg-0pky" bgcolor="#f6f7fd"></td>
                    <td class="tg-0pky" rowspan="2" bgcolor="#90caf9">Seminars</td>

                </tr>
                <tr>
                  <td class="tg-0pky">19:00</td>

                </tr>
                <tr>
                  <td class="tg-0pky">19:15</td>
                  <td class="tg-0pky" bgcolor="#f6f7fd"></td>
                  <td class="tg-0pky" rowspan="3" bgcolor="#ffe082">Unofficial Event - Cuber Tambola</td>

                </tr>
                <tr>
                  <td class="tg-0pky">19:30</td>
                </tr>
                <tr>
                  <td class="tg-0pky">19:45</td>
                </tr>
                <tr>
                  <td class="tg-0pky">20:00</td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
            <div class="wrapper">
            <table class = "schdule-table-striped">
              <colgroup>
                <col class="grey" />
                <col class="red" />
                <col class="yellow" />
                <col class="green" />
                <col class="purple" />
                <col class="white" />
              </colgroup>
              <thead>
                <tr>
                  <th class="tg-xldj">Time</th>
                  <th class="tg-0pky">Stage 1</th>
                  <th class="tg-0pky">Stage 2</th>
                  <th class="tg-0pky">Stage 3</th>
                  <th class="tg-0pky">Stage 4</th>
                  <th class="tg-0pky">BLD Room</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="tg-0pky">08:00</td>
                  <td class="tg-0pky" colspan="5" rowspan="5" bgcolor="#ec407a"> <img src="../img/events/breakfast.png" alt="LOGO" class="center"> Breakfast</td>
                </tr>
                <tr>
                  <td class="tg-0pky">08:15</td>
                </tr>
                <tr>
                  <td class="tg-0pky">08:30</td>
                </tr>
                <tr>
                  <td class="tg-0pky">08:30</td>
                </tr>
                <tr>
                  <td class="tg-0pky">08:45</td>
                </tr>
                <tr>
                  <td class="tg-0pky">09:00</td>





                </tr>
                <tr>
                  <td class="tg-0pky">09:15</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#1565c0"> <img src="../img/events/FMC.png" alt="LOGO" class="center"> 3x3x3 Fewest Moves Attempt 3</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#1565c0"> <img src="../img/events/FMC.png" alt="LOGO" class="center"> 3x3x3 Fewest Moves Attempt 3</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#1565c0"> <img src="../img/events/FMC.png" alt="LOGO" class="center"> 3x3x3 Fewest Moves Attempt 3</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#1565c0"> <img src="../img/events/FMC.png" alt="LOGO" class="center"> 3x3x3 Fewest Moves Attempt 3</td>

                </tr>
                <tr>
                  <td class="tg-0pky">09:30</td>

                </tr>
                <tr>
                  <td class="tg-0pky">09:45</td>

                </tr>
                <tr>
                  <td class="tg-0pky">10:00</td>

                </tr>
                <tr>
                  <td class="tg-0pky">10:15</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 2</td>
                  <td class="tg-0pky" rowspan="4" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 2</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#ef5350"> <img src="../img/events/7x7.png" alt="  LOGO" class="center"> 7x7x7 Cube Final</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#ef5350"> <img src="../img/events/7x7.png" alt="  LOGO" class="center"> 7x7x7 Cube Final</td>

                </tr>
                <tr>
                  <td class="tg-0pky">10:30</td>

                </tr>
                <tr>
                  <td class="tg-0pky">10:45</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 2</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 2</td>

                </tr>
                <tr>
                  <td class="tg-0pky">11:00</td>

                </tr>
                <tr>
                  <td class="tg-0pky">11:15</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Round 2</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Round 2</td>
                  <td class="tg-0pky" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Round 2</td>
                  <td class="tg-0pky" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Round 2</td>

                </tr>
                <tr>
                  <td class="tg-0pky">11:30</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#8d6e63"> <img src="../img/events/6x6.png" alt="LOGO" class="center"> 6x6x6 Cube Final</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#8d6e63"> <img src="../img/events/6x6.png" alt="LOGO" class="center"> 6x6x6 Cube Final</td>

                </tr>
                <tr>
                  <td class="tg-0pky">11:45</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Round 2</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Round 2</td>

                </tr>
                <tr>
                  <td class="tg-0pky">12:00</td>
                  <td class="tg-0pky" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Round 2</td>
                  <td class="tg-0pky" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Round 2</td>

                </tr>
                <tr>
                  <td class="tg-0pky">12:15</td>
                  <td class="tg-0pky" bgcolor="#f6f7fd"></td>
                  <td class="tg-0pky" bgcolor="#90a4ae"> <img src="../img/events/5x5.png" alt="LOGO" class="center"> 5x5x5 Cube Final</td>
                  <td class="tg-0pky" bgcolor="#90a4ae"> <img src="../img/events/5x5.png" alt="LOGO" class="center"> 5x5x5 Cube Final</td>


                </tr>
                <tr>
                  <td class="tg-0pky">12:30</td>
                  <td class="tg-0pky" bgcolor="#f06292"> <img src="../img/events/skewb.png" alt="LOGO" class="center"> Skewb Round 2</td>
                  <td class="tg-0pky" bgcolor="#f06292"> <img src="../img/events/skewb.png" alt="LOGO" class="center"> Skewb Round 2</td>
                  <td class="tg-0pky" bgcolor="#f06292"> <img src="../img/events/skewb.png" alt="LOGO" class="center"> Skewb Round 2</td>


                </tr>
                <tr>
                  <td class="tg-0pky">12:45</td>
                  <td class="tg-0pky" bgcolor="#f6f7fd"></td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#4dd0e1"> <img src="../img/events/CLOCK.png" alt="  LOGO" class="center"> Clock Final</td>
                  <td class="tg-0pky" rowspan="2" bgcolor="#4dd0e1"> <img src="../img/events/CLOCK.png" alt="  LOGO" class="center"> Clock Final</td>


                </tr>
                <tr>
                  <td class="tg-0pky">13:00</td>
                </tr>
                <tr>
                  <td class="tg-0pky">13:15</td>
                  <td class="tg-0pky" colspan="5" rowspan="3" bgcolor="#009688"> <img src="../img/events/lunch.png" alt="LOGO" class="center"> Lunch</td>
                </tr>
                <tr>
                  <td class="tg-0pky">13:30</td>
                </tr>
                <tr>
                  <td class="tg-0pky">13:45</td>
                </tr>
                <tr>
                  <td class="tg-0pky">14:00</td>
                  <td class="tg-0pky" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 3</td>
                  <td class="tg-0pky" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 3</td>
                  <td class="tg-0pky" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 3</td>
                  <td class="tg-0pky" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Round 3</td>

                </tr>
                <tr>
                  <td class="tg-0pky">14:20</td>
                  <td class="tg-0pky" bgcolor="#d1c4e9"> <img src="../img/events/3OH.png" alt="LOGO" class="center"> 3x3x3 One-Handed Round 2</td>
                  <td class="tg-0pky" bgcolor="#d1c4e9"> <img src="../img/events/3OH.png" alt="LOGO" class="center"> 3x3x3 One-Handed Round 2</td>
                  <td class="tg-0pky" bgcolor="#d1c4e9"> <img src="../img/events/3OH.png" alt="LOGO" class="center"> 3x3x3 One-Handed Round 2</td>


                </tr>
                <tr>
                  <td class="tg-0pky">14:40</td>
                  <td class="tg-0pky" bgcolor="#e91e63"> <img src="../img/events/4x4.png" alt="LOGO" class="center"> 4x4x4 Cube Final</td>
                  <td class="tg-0pky" bgcolor="#e91e63"> <img src="../img/events/4x4.png" alt="LOGO" class="center"> 4x4x4 Cube Final</td>
                  <td class="tg-0pky" bgcolor="#e91e63"> <img src="../img/events/4x4.png" alt="LOGO" class="center"> 4x4x4 Cube Final</td>


                </tr>
                <tr>
                  <td class="tg-0pky">15:00</td>
                  <td class="tg-0pky" bgcolor="#f6f7fd"></td>
                  <td class="tg-0pky" bgcolor="#d1c4e9"> <img src="../img/events/3OH.png" alt="LOGO" class="center"> 3x3x3 One-Handed Final</td>
                  <td class="tg-0pky" bgcolor="#d1c4e9"> <img src="../img/events/3OH.png" alt="LOGO" class="center"> 3x3x3 One-Handed Final</td>


                </tr>
                <tr>
                  <td class="tg-0pky">15:15</td>
                  <td class="tg-0pky" bgcolor="#f6f7fd"></td>
                  <td class="tg-0pky" bgcolor="#f06292"> <img src="../img/events/skewb.png" alt="LOGO" class="center"> Skewb Final</td>
                  <td class="tg-0pky" bgcolor="#f06292"> <img src="../img/events/skewb.png" alt="LOGO" class="center"> Skewb Final</td>


                </tr>
                <tr>
                  <td class="tg-0pky">15:30</td>
                  <td class="tg-0pky" bgcolor="#f6f7fd"></td>
                  <td class="tg-0pky" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Final</td>
                  <td class="tg-0pky" bgcolor="#ff8a80"> <img src="../img/events/pyra.png" alt="LOGO" class="center"> Pyraminx Final</td>


                </tr>
                <tr>
                  <td class="tg-0pky">15:45</td>
                  <td class="tg-0pky" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Final</td>
                  <td class="tg-0pky" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Final</td>
                  <td class="tg-0pky" bgcolor="#ab47bc"> <img src="../img/events/2x2.png" alt="LOGO" class="center"> 2x2x2 Cube Final</td>


                </tr>
                <tr>
                  <td class="tg-0pky">16:00</td>
                  <td class="tg-0pky" colspan="4" rowspan="3" bgcolor="#ffe082">States Cup</td>

                </tr>
                <tr>
                  <td class="tg-0pky">16:15</td>

                </tr>
                <tr>
                  <td class="tg-0pky">16:30</td>

                </tr>
                <tr>
                  <td class="tg-0pky">16:45</td>
                  <td class="tg-0pky" bgcolor="#f6f7fd"></td>
                  <td class="tg-0pky" rowspan="5" bgcolor="#8e24aa"> <img src="../img/events/3x3.png" alt="LOGO" class="center"> 3x3x3 Cube Final</td>



                </tr>
                <tr>
                  <td class="tg-0pky">17:00</td>




                </tr>
                <tr>
                  <td class="tg-0pky">17:15</td>




                </tr>
                <tr>
                  <td class="tg-0pky">17:30</td>




                </tr>
                <tr>
                  <td class="tg-0pky">17:45</td>




                </tr>
                <tr>
                  <td class="tg-0pky">18:00</td>
                  <td class="tg-0pky" colspan="4" rowspan="4" bgcolor="#7cb342">Prizes</td>

                </tr>
                <tr>
                  <td class="tg-0pky">18:15</td>

                </tr>
                <tr>
                  <td class="tg-0pky">18:30</td>

                </tr>
                <tr>
                  <td class="tg-0pky">18:45</td>

                </tr>
                <tr>
                  <td class="tg-0pky">19:00</td>
                  <td class="tg-0pky" colspan="4" bgcolor="#ff5252">Group Photo</td>

                </tr>
                <tr>
                  <td class="tg-0pky">19:15</td>





                </tr>
                <tr>
                  <td class="tg-0pky">19:30</td>





                </tr>
                <tr>
                  <td class="tg-0pky">19:45</td>





                </tr>
                <tr>
                  <td class="tg-0pky">20:00</td>





                </tr>
              </tbody>
                </table>
            </div>

        </div>

      </div>
</div>

    </section>
  </main>
<?php
include('../footer.php')
?>
