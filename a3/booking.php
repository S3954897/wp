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
                    <div id="div1" <?php if (isset($_GET["Avatar:_The_Way_of_Water"]) == "ACT") {
                        echo 'style="display:block;"'; }
                    else {
                        echo 'style="display:none;"';
                    } ?>>
                        <div class = "bookingFormArea">
                            <h3>Booking</h3>
                            <form id="movieBooking" onsubmit="return validateForm()" action="booking.php" method="post">
                                <input type="hidden" name="Avatar: The Way of Water" value="ACT">
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
                                        <label for="monday">Monday 9pm</label>
                                        <input type="radio" id="tuesday" name="day" value="TUE" data-pricing="fullprice">
                                        <label for="tuesday">Tuesday 9pm</label>
                                        <input type="radio" id="wednesday" name="day" value="WED" data-pricing="fullprice">
                                        <label for="wednesday">Wednesday 9pm</label>
                                        <input type="radio" id="thursday" name="day" value="THU" data-pricing="fullprice">
                                        <label for="thursday">Thursday 9pm</label>
                                        <input type="radio" id="friday" name="day" value="FRI" data-pricing="fullprice">
                                        <label for="friday">Friday 9pm</label>
                                        <input type="radio" id="saturday" name="day" value="SAT" data-pricing="fullprice">
                                        <label for="saturday">Saturday 6pm</label>
                                        <input type="radio" id="sunday" name="day" value="SUN" data-pricing="fullprice">
                                        <label for="sunday">Sunday 6pm</label>
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
                        <div class="showInfoFull" id="showInfoFull_Avatar">
                            <h3>Avatar: The Way of Water</h3>
                            <p>Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.</p>
                            <p>Director: James Cameron</p>
                            <p>Writers: James Cameron, Rick Jaffa,Amanda Silver</p>
                            <p>Stars: Sam Worthington, Zoe Saldana, Sigourney Weaver</p>
                        </div>
                        <div class="trailer">
                            <iframe src="https://www.youtube.com/embed/d9MyW72ELq0" title="Avatar: The Way of Water | Official Trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div id="div2" <?php if (isset($_GET["Weird:_The_Al_Yankovic_Story"]) == "RMC") {
                        echo 'style="display:block;"'; }
                    else {
                        echo 'style="display:none;"';
                    } ?>>
                        <p>This is div 2</p>
                        <div class="trailer">
                            <iframe src="https://www.youtube.com/embed/cCNKdJ2CIJk" title="WEIRD: The Al Yankovic Story - official trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div id="div3" <?php if (isset($_GET["Puss_in_Boots:_The_Last_Wish"]) == "FAM") {
                        echo 'style="display:block;"'; }
                    else {
                        echo 'style="display:none;"';
                    } ?>>
                        <p>This is div 3</p>
                        <div class="trailer">
                            <iframe src="https://www.youtube.com/embed/fOngjQYypZU" title="Puss in Boots: The Last Wish | Official Trailer 3 (Universal Pictures) HD" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div id="div2" <?php if (isset($_GET["Margrete:_Queen_of_the_North"]) == "AHF") {
                        echo 'style="display:block;"'; }
                    else {
                        echo 'style="display:none;"';
                    } ?>>
                        <p>This is div 4</p>
                        <div class="trailer">
                            <iframe src="https://www.youtube.com/embed/3A9u7FoljHM" title="MARGRETE: QUEEN OF THE NORTH - Official HD Trailer - Only in Cinemas" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
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



  </body>
</html>
