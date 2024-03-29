<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Booking Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
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
                                <label for="seats[STA]">Standard Adult Seat/s</label>
                                <select id="seats[STA]" name="seats[STA]">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1" data-fullprice="21.5" data-discprice="16">1</option>
                                    <option value="2" data-fullprice="21.5" data-discprice="16">2</option>
                                    <option value="3" data-fullprice="21.5" data-discprice="16">3</option>
                                    <option value="4" data-fullprice="21.5" data-discprice="16">4</option>
                                    <option value="5" data-fullprice="21.5" data-discprice="16">5</option>
                                    <option value="6" data-fullprice="21.5" data-discprice="16">6</option>
                                    <option value="7" data-fullprice="21.5" data-discprice="16">7</option>
                                    <option value="8" data-fullprice="21.5" data-discprice="16">8</option>
                                    <option value="9" data-fullprice="21.5" data-discprice="16">9</option>
                                    <option value="10" data-fullprice="21.5" data-discprice="16">10</option>
                                </select>
                                <br>
                                <label for="seats[STP]">Standard Concession Seat/s</label>
                                <select id="seats[STP]" name="seats[STP]">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1" data-fullprice="19" data-discprice="14.5">1</option>
                                    <option value="2" data-fullprice="19" data-discprice="14.5">2</option>
                                    <option value="3" data-fullprice="19" data-discprice="14.5">3</option>
                                    <option value="4" data-fullprice="19" data-discprice="14.5">4</option>
                                    <option value="5" data-fullprice="19" data-discprice="14.5">5</option>
                                    <option value="6" data-fullprice="19" data-discprice="14.5">6</option>
                                    <option value="7" data-fullprice="19" data-discprice="14.5">7</option>
                                    <option value="8" data-fullprice="19" data-discprice="14.5">8</option>
                                    <option value="9" data-fullprice="19" data-discprice="14.5">9</option>
                                    <option value="10" data-fullprice="19" data-discprice="14.5">10</option>
                                </select>
                                <br>
                                <label for="seats[STC]">Standard Child Seat/s</label>
                                <select id="seats[STC]" name="seats[STC]">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1" data-fullprice="17.5" data-discprice="13">1</option>
                                    <option value="2" data-fullprice="17.5" data-discprice="13">2</option>
                                    <option value="3" data-fullprice="17.5" data-discprice="13">3</option>
                                    <option value="4" data-fullprice="17.5" data-discprice="13">4</option>
                                    <option value="5" data-fullprice="17.5" data-discprice="13">5</option>
                                    <option value="6" data-fullprice="17.5" data-discprice="13">6</option>
                                    <option value="7" data-fullprice="17.5" data-discprice="13">7</option>
                                    <option value="8" data-fullprice="17.5" data-discprice="13">8</option>
                                    <option value="9" data-fullprice="17.5" data-discprice="13">9</option>
                                    <option value="10" data-fullprice="17.5" data-discprice="13">10</option>
                                </select>
                                <br>
                                <label for="seats[FCA]">First Class Adult Seat/s</label>
                                <select id="seats[FCA]" name="seats[FCA]">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1" data-fullprice="31" data-discprice="25">1</option>
                                    <option value="2" data-fullprice="31" data-discprice="25">2</option>
                                    <option value="3" data-fullprice="31" data-discprice="25">3</option>
                                    <option value="4" data-fullprice="31" data-discprice="25">4</option>
                                    <option value="5" data-fullprice="31" data-discprice="25">5</option>
                                    <option value="6" data-fullprice="31" data-discprice="25">6</option>
                                    <option value="7" data-fullprice="31" data-discprice="25">7</option>
                                    <option value="8" data-fullprice="31" data-discprice="25">8</option>
                                    <option value="9" data-fullprice="31" data-discprice="25">9</option>
                                    <option value="10" data-fullprice="31" data-discprice="25">10</option>
                                </select>
                                <br>
                                <label for="seats[FCP]">First Class Concession Seat/s</label>
                                <select id="seats[FCP]" name="seats[FCP]">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1" data-fullprice="28" data-discprice="23.5">1</option>
                                    <option value="2" data-fullprice="28" data-discprice="23.5">2</option>
                                    <option value="3" data-fullprice="28" data-discprice="23.5">3</option>
                                    <option value="4" data-fullprice="28" data-discprice="23.5">4</option>
                                    <option value="5" data-fullprice="28" data-discprice="23.5">5</option>
                                    <option value="6" data-fullprice="28" data-discprice="23.5">6</option>
                                    <option value="7" data-fullprice="28" data-discprice="23.5">7</option>
                                    <option value="8" data-fullprice="28" data-discprice="23.5">8</option>
                                    <option value="9" data-fullprice="28" data-discprice="23.5">9</option>
                                    <option value="10" data-fullprice="28" data-discprice="23.5">10</option>
                                </select>
                                <br>
                                <label for="seats[FCC]">First Class Child Seat/s</label>
                                <select id="seats[FCC]" name="seats[FCC]">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1" data-fullprice="25" data-discprice="22">1</option>
                                    <option value="2" data-fullprice="25" data-discprice="22">2</option>
                                    <option value="3" data-fullprice="25" data-discprice="22">3</option>
                                    <option value="4" data-fullprice="25" data-discprice="22">4</option>
                                    <option value="5" data-fullprice="25" data-discprice="22">5</option>
                                    <option value="6" data-fullprice="25" data-discprice="22">6</option>
                                    <option value="7" data-fullprice="25" data-discprice="22">7</option>
                                    <option value="8" data-fullprice="25" data-discprice="22">8</option>
                                    <option value="9" data-fullprice="25" data-discprice="22">9</option>
                                    <option value="10" data-fullprice="25" data-discprice="22">10</option>
                                </select>
                                <br>
                                <div>
                                    <fieldset>
                                        <legend target="_blank">Session times</legend>
                                        <input type="radio" id="monday" name="day" value="MON" data-pricing="discprice" checked>
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
                                </div>
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

      <aside id="debug">
      <hr>
      <h3>Debug Area</h3>
      <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
      </pre>
    </aside>

  </body>
</html>
