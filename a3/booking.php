<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Booking Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
<!--    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>-->
      <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
      <script src='script.js'></script>
      <?php include 'tools.php'; ?>
  </head>

  <body>
  <?php
    $show = $_GET["show"];
        if (isset($movies)) {
            foreach ($movies as $movie) {
                if ($show === $movie->code){ ?>
                    <div class = "headerArea">
                      <header>
                          <h1>Lunardo</h1>
                      </header>
                    </div>

                    <div class = "navArea">
                      <nav>
                          <ul class = "navGrid">
                              <li><a href="index.php#aboutUs">About us</a></li>
                              <li><a href="index.php#seatsAndPricing">Seats and Pricing</a></li>
                              <li><a href="index.php#nowShowing">Now Showing</a></li>
                          </ul>
                      </nav>
                    </div>
                    <main>
                        <div class="mainArea">
                            <div class="selectedMovie">
                                <div>
                                    <div class = "bookingFormArea">
                                        <h3>Booking</h3>
                                        <h3><?php echo $movie->title ?></h3>
                                        <form id="movieBooking" onsubmit="return validateForm()" action="booking.php" method="post">
                                            <input type="hidden" name="<?php $movie->title?>">
                                            <?php if (isset($seatSelection)) {
                                                foreach ($seatSelection as $seatSelected) { ?>
                                                    <label for="<?php echo $seatSelected->seatTypeID; ?>"><?php echo $seatSelected->type; ?></label>
                                                    <select onchange="calcPrice()" id="<?php echo $seatSelected->seatTypeID; ?>" name="<?php echo $seatSelected->seatTypeID; ?>">
                                                        <option value="">Select an option</option>
                                                        <option value="1" <?php echo $seatSelected->price; ?>>1</option>
                                                        <option value="2" <?php echo $seatSelected->price; ?>>2</option>
                                                        <option value="3" <?php echo $seatSelected->price; ?>>3</option>
                                                        <option value="4" <?php echo $seatSelected->price; ?>>4</option>
                                                        <option value="5" <?php echo $seatSelected->price; ?>>5</option>
                                                        <option value="6" <?php echo $seatSelected->price; ?>>6</option>
                                                        <option value="7" <?php echo $seatSelected->price; ?>>7</option>
                                                        <option value="8" <?php echo $seatSelected->price; ?>>8</option>
                                                        <option value="9" <?php echo $seatSelected->price; ?>>9</option>
                                                        <option value="10" <?php echo $seatSelected->price; ?>>10</option>
                                                    </select>
                                                    <?php }
                                                    } ?>
                                                    <fieldset onchange="calcPrice()" id="daySelection">
                                                        <legend target="_blank">Session times</legend>
                                                        <input type="radio" id="monday" name="day" value="MON" data-pricing="discprice">
                                                        <label for="monday"
                                                            <?php
                                                                $time = $movie->sessionDaysAndTimes[0];
                                                                if (is_numeric($time)) {
                                                                    echo  "style='display:block'"; ?> > <?php echo "Monday - ", date("g:i a", strtotime($time . ":00"));
                                                                }
                                                                else {
                                                                    echo "style='display:none'" ;?> > <?php
                                                                }
                                                            ?>
                                                        </label>

                                                        <input type="radio" id="tuesday" name="day" value="TUE" data-pricing="fullprice">
                                                        <label for="tuesday"
                                                            <?php
                                                                $time = $movie->sessionDaysAndTimes[1];
                                                                if (is_numeric($time)) {
                                                                    echo  "style='display:block'"; ?> > <?php echo "Tuesday - ", date("g:i a", strtotime($time . ":00"));
                                                                }
                                                                else {
                                                                    echo "style='display:none'" ;?> > <?php
                                                                }
                                                            ?>
                                                        </label>
                                                        <input type="radio" id="wednesday" name="day" value="WED" data-pricing="fullprice">
                                                        <label for="wednesday"
                                                            <?php
                                                                $time = $movie->sessionDaysAndTimes[2];
                                                                if (is_numeric($time)) {
                                                                    echo  "style='display:block'"; ?> > <?php echo "Wednesday - ", date("g:i a", strtotime($time . ":00"));
                                                                }
                                                                else {
                                                                    echo "style='display:none'" ;?> > <?php
                                                                }
                                                            ?>
                                                        </label>
                                                        <input type="radio" id="thursday" name="day" value="THU" data-pricing="fullprice">
                                                        <label for="thursday"
                                                            <?php
                                                                $time = $movie->sessionDaysAndTimes[3];
                                                                if (is_numeric($time)) {
                                                                    echo  "style='display:block'"; ?> > <?php echo "Thursday - ", date("g:i a", strtotime($time . ":00"));
                                                                }
                                                                else {
                                                                    echo "style='display:none'" ;?> > <?php
                                                                }
                                                            ?>
                                                        </label>
                                                        <input type="radio" id="friday" name="day" value="FRI" data-pricing="fullprice">
                                                        <label for="friday"
                                                            <?php
                                                                $time = $movie->sessionDaysAndTimes[4];
                                                                if (is_numeric($time)) {
                                                                    echo  "style='display:block'"; ?> > <?php echo "Friday - ", date("g:i a", strtotime($time . ":00"));
                                                                }
                                                                else {
                                                                    echo "style='display:none'" ;?> > <?php
                                                                }
                                                            ?>
                                                        </label>
                                                        <input type="radio" id="saturday" name="day" value="SAT" data-pricing="fullprice">
                                                        <label for="saturday"
                                                            <?php
                                                                $time = $movie->sessionDaysAndTimes[5];
                                                                if (is_numeric($time)) {
                                                                    echo  "style='display:block'"; ?> > <?php echo "Saturday - ", date("g:i a", strtotime($time . ":00"));
                                                                }
                                                                else {
                                                                    echo "style='display:none'" ;?> > <?php
                                                                }
                                                            ?>
                                                        </label>
                                                        <input type="radio" id="sunday" name="day" value="SUN" data-pricing="fullprice">
                                                        <label for="sunday"
                                                            <?php
                                                                $time = $movie->sessionDaysAndTimes[6];
                                                                if (is_numeric($time)) {
                                                                    echo  "style='display:block'"; ?> > <?php echo "Sunday - ", date("g:i a", strtotime($time . ":00"));
                                                                }
                                                                else {
                                                                    echo "style='display:none'" ;?> > <?php
                                                                }
                                                            ?>
                                                        </label>
                                                    </fieldset>
                                                    <h3>Customer Detail</h3>
                                                    <label for="user[name]">Full Name</label>
                                                    <br>
                                                    <input type="text" id="user[name]" name="user[name]" placeholder="Enter your full name">
                                                    <br>
                                                    <label for="user[email]">Email</label>
                                                    <br>
                                                    <input type="text" id="user[email]" name="user[email]" placeholder="Enter your email">
                                                    <br>
                                                    <label for="user[mobile]">Mobile</label>
                                                    <br>
                                                    <input type="text" id="user[mobile]" name="user[mobile]" placeholder="Enter your mobile">
                                                    <br>
                                                    <button type="submit">Submit your Booking</button>
                                        </form>
                                    </div>
                                    <div class="showInfoFull">
                                        <h3><?php echo $movie->title ?></h3>
                                        <p><?php echo $movie->descriptionFull ?></p>
                                        <p><?php echo $movie->directors ?></p>
                                        <p><?php echo $movie->writers ?></p>
                                        <p><?php echo $movie->actors ?></p>
                                    </div>
                                    <div class="trailer">
                                        <iframe src=<?php echo $movie->trailer ?></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <footer class="footerArea">
                      <div>&copy;<script>
                        document.write(new Date().getFullYear());
                      </script> Grant Nicholas, S3954897. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
                      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
                      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
                    </footer>
                <?php }
            }
            header("Location: index.php");
        }
  ?>

  </body>
</html>
