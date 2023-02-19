<!DOCTYPE html>
<html lang='en'>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lunardo Home Page</title>

      <!-- Keep wireframe.css for debugging, add your css to style.css -->
<!--      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>-->
      <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
      <script src='script.js'></script>
      <?php include 'tools.php';
      unset($_SESSION["show"]);?>

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
                <li><a href="#aboutUs">About us</a></li>
                <li><a href="#seatsAndPricing">Seats and Pricing</a></li>
                <li><a href="#nowShowing">Now Showing</a></li>
            </ul>
        </nav>
    </div>

    <div class="mainArea">
        <main>

            <div class = "area aboutUsArea" id= "aboutUs">
                <article>
                    <h2>About us</h2>
                    <h3>Reopening Soon</h3>
                    <p>
                        The Lunardo team are excited to announce that our cinema has undergone extensive
                        renovations and improvements. Our goal was to create a more comfortable and enjoyable
                        movie-going experience for our valued customers, and we believe we have succeeded in
                        doing just that.
                    </p>
                    <p>
                        We have added new seats for your comfort, including new ultra comfortable standard
                        seats and floating on a cloud reclinable first-class seats. The first-class seats offer
                        a luxurious and comfortable experience, with added legroom and the ability to recline.
                        Additionally, our projection and sound systems have been upgraded to include 3D Dolby
                        Vision projection and Dolby Atmos sound. These new technologies will enhance the visual
                        and auditory experience of our movies, immersing you in the film like never before.
                    </p>
                    <p>
                        We're excited to announce that our cinema will be opening soon, stay tuned for the
                        official opening date! We look forward to welcoming you to our new and improved cinema.
                    </p>
                </article>
            </div>

            <div class = "area seatsAndPricesArea" id= "seatsAndPricing">
                <article class = "seatsAndPricesGrid">
                    <h2>Seats and Pricing</h2>
                    <p>
                        The Cinema offers discounted pricing weekday afternoons (12pm weekdays matinée sessions)
                        and all day on Mondays.
                    </p>
                    <h3>Standard seat pricing</h3>
                    <img id= "standardSeatingImage"  src="https://titan.csit.rmit.edu.au/~s3954897/media/Profern-Standard-Twin.png" alt = "Standard Seating">
                    <table id = "standardSeatingTable">
                        <tbody >
                            <tr><th>Type</th><th>Discount Price</th><th>Normal Price</th></tr>
                            <tr><td>Adult</td><td id="displayFullPriceSTA"></td><td id="displayDiscPriceSTA"></td></tr>
                            <tr><td>Concession</td ><td id="displayFullPriceSTP"></td><td id="displayDiscPriceSTP"></td></tr>
                            <tr><td>Child</td><td id="displayFullPriceSTC"></td><td id="displayDiscPriceSTC"></td></tr>
                        </tbody>
                    </table>
                    <h3>First class seat pricing</h3>
                    <img src="https://titan.csit.rmit.edu.au/~s3954897/media/Profern-Verona-Twin.png" alt = "First Class Seating">
                    <table id="firstClassSeating">
                        <tbody>
                        <tr><th>Type</th><th>Discount Price</th><th>Normal Price</th></tr>
                        <tr><td>Adult</td><td id="displayFullPriceFCA"></td><td id="displayDiscPriceFCA"></td></tr>
                        <tr><td>Concession</td ><td id="displayFullPriceFCP"></td><td id="displayDiscPriceFCP"></td></tr>
                        <tr><td>Child</td><td id="displayFullPriceFCC"></td><td id="displayDiscPriceFCC"></td></tr>
                        </tbody>
                    </table>
                </article>
            </div>

            <div class = "area nowShowingArea" id= "nowShowing">
                <h2>Now Showing</h2>
                <article class= "nowShowingGrid">
                    <?php if (isset($movies)) {
                        foreach ($movies as $movie) { ?>
                            <div class="showInfoGrid">
                                <div class='card3D'>
                                    <div class="showImage">
                                        <img src="<?php echo $movie->poster;?>" width = "250">
                                    </div>
                                    <div>
                                        <article class = "showPlot">
                                            <p><?php echo $movie->description; ?></p>
                                        </article>
                                    </div>
                                </div>
                                <div class="showDetails">
                                    <h4 class = "showTitle"><?php echo $movie->title; ?></h4>
                                    <span class = "showRating">Rating: <?php echo $movie->rating; ?></span>
                                    <ul>
                                        <li class = "showDays1">Monday - Tuesday</li>
                                        <ul>
                                            <li class = "showTimes1"><?php
                                                $time = $movie->sessionDaysAndTimes[0];
                                                if ($time !== '-') {
                                                    echo date("g a", strtotime($time . ":00"));
                                                } ?>
                                            </li>
                                        </ul>
                                        <li class = "showDays2">Wednesday - Friday</li>
                                        <ul>
                                            <li class = "showTimes2"><?php
                                                $time = $movie->sessionDaysAndTimes[2];
                                                if ($time !== '-'){
                                                    echo date("g a", strtotime($time . ":00"));
                                                } ?>
                                            </li>
                                        </ul>
                                        <li class = "showDays3">Saturday - Sunday</li>
                                        <ul>
                                            <li class = "showTimes3"><?php
                                                $time = $movie->sessionDaysAndTimes[5];
                                                if ($time !== '-'){
                                                    echo date("g a", strtotime($time . ":00"));
                                                } ?>
                                            </li>
                                        </ul>
                                    </ul>
                                    <form action="booking.php" method="GET" id="bookNowForm">
                                        <input type="hidden" name="show" value="<?php echo $movie->code; ?>">
                                        <input type="submit" value="Book Now" id="bookNowButton">
                                    </form>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </article>

            </div>

        </main>
    </div>

    <div class = footerArea>
        <footer>
            <div>&copy;<script>
                    document.write(new Date().getFullYear());
                </script> Grant Nicholas, S3954897. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
            <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
            <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
        </footer>
    </div>


  </body>
</html>

