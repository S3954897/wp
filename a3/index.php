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
                        <tbody>
                            <tr><th>Type</th><th>Discount Price</th><th>Normal Price</th></tr>
                            <tr><td>Adult</td><td>$16.00</td><td>$21.50</td></tr>
                            <tr><td>Concession</td><td>$14.50</td><td>$19.00</td></tr>
                            <tr><td>Child</td><td>$13.00</td><td>$17.50</td></tr>
                        </tbody>
                    </table>
                    <h3>First class seat pricing</h3>
                    <img src="https://titan.csit.rmit.edu.au/~s3954897/media/Profern-Verona-Twin.png" alt = "First Class Seating">
                    <table id="firstClassSeating">
                        <tbody>
                            <tr><th>Type</th><th>Discount Price</th><th>Normal Price</th></tr>
                            <tr><td>Adult</td><td>$25.00</td><td>$31.00</td></tr>
                            <tr><td>Concession</td><td>$23.50</td><td>$28.00</td></tr>
                            <tr><td>Child</td><td>$22.00</td><td>$25.00</td></tr>
                        </tbody>
                    </table>
                </article>
            </div>

            <div class = "area nowShowingArea" id= "nowShowing">
                <h2>Now Showing</h2>
                <article class= "nowShowingGrid">
                    <div class="showInfoGrid" id = "Avatar: The Way of Water">
                        <div class='card3D'>
                            <div class="showImage">
                                <img src="https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UY458_.jpg 319w, https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UY687_.jpg 479w, https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UY337_.jpg 235w, https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UX900_.jpg 900w" width = "250">
                            </div>
                            <div>
                                <article class = "showPlot">
                                    <p>Jake Sully lives with his newfound family formed on the extrasolar moon Pandora.
                                        Once a familiar threat returns to finish what was previously started, Jake must
                                        work with Neytiri and the army of the Na'vi race to protect their home.
                                    </p>
                                </article>
                            </div>
                        </div>
                        <div class="showDetails">
                            <h4 class = "showTitle">Avatar: The Way of Water</h4>
                            <span class = "showRating">Rating: M</span>
                            <ul>
                                <li class = "showDays1">Monday - Tuesday</li>
                                <ul>
                                    <li class = "showTimes1">9pm</li>
                                </ul>

                                <li class = "showDays2">Wednesday - Friday</li>
                                <ul>
                                    <li class = "showTimes2">9pm</li>
                                </ul>
                                <li class = "showDays3">Saturday - Sunday</li>
                                <ul>
                                    <li class = "showTimes3">6pm</li>
                                </ul>
                            </ul>
                            <form action="booking.php" method="GET" id="bookNowForm">
                                <input type="hidden" name="Avatar: The Way of Water" value="ACT">
                                <input type="submit" value="Book Now" id="bookNowButton">
                            </form>
                        </div>
                    </div>

                    <div class="showInfoGrid" id = "Weird: The Al Yankovic Story">
                        <div class='card3D'>
                            <div class="showImage">
                                <img class="sc-7c0a9e7c-0 fEIEer peek" src="https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY438_.jpg 319w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY658_.jpg 479w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY337_.jpg 245w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY576_.jpg 420w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY720_.jpg 525w" data-image-id="rm3779790849-prev" alt="Daniel Radcliffe in Weird: The Al Yankovic Story (2022)">
                            </div>
                            <div>
                                <article class = "showPlot">
                                    <p>Explores every facet of Yankovic's life, from his meteoric rise to fame with
                                        early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love
                                        affairs and famously depraved lifestyle.
                                    </p>
                                </article>
                            </div>
                        </div>
                        <div class="showDetails">
                            <h4 class = "showTitle">Weird: The Al Yankovic Story</h4>
                            <span class = "showRating">Rating: M</span>
                            <ul>
                                <li class = "showDays1">Monday - Tuesday</li>
                                    <ul>
                                        <li class = "showTimes1"> - </li>
                                    </ul>

                                <li class = "showDays2">Wednesday - Friday</li>
                                    <ul>
                                        <li class = "showTimes2">12pm</li>
                                    </ul>
                                <li class = "showDays3">Saturday - Sunday</li>
                                    <ul>
                                        <li class = "showTimes3">3pm</li>
                                    </ul>
                            </ul>
                            <form action="booking.php" method="GET" id="bookNowForm">
                                <input type="hidden" name="Weird: The Al Yankovic Story" value="RMC">
                                <input type="submit" value="Book Now" id="bookNowButton">
                            </form>
                        </div>
                    </div>


                    <div class="showInfoGrid" id = "Puss in Boots: The Last Wish">
                        <div class='card3D'>
                            <div class="showImage">
                                <img src="https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_FMjpg_UY485_.jpg 319w, https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_FMjpg_UY728_.jpg 479w, https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_FMjpg_UY337_.jpg 221w, https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_FMjpg_UX760_.jpg 760w" data-image-id="rm342562561-curr" alt="Antonio Banderas, Salma Hayek, Wagner Moura, Ray Winstone, Olivia Colman, Harvey Guillén, Samson Kayo, and Florence Pugh in Puss in Boots: The Last Wish (2022)" class="sc-7c0a9e7c-0 fEIEer">
                            </div>
                            <div>
                                <article class = "showPlot">
                                    <p>Puss in Boots discovers that his passion for adventure has taken its toll: he
                                        has burned through eight of his nine lives. Puss sets out on an epic journey
                                        to find the mythical Last Wish and restore his nine lives.
                                    </p>
                                </article>
                            </div>
                        </div>
                        <div class="showDetails">
                            <h4 class = "showTitle">Puss in Boots: The Last Wish</h4>
                            <span class = "showRating">Rating: PG</span>
                            <ul>
                                <li class = "showDays1">Monday - Tuesday</li>
                                <ul>
                                    <li class = "showTimes1">12pm</li>
                                </ul>

                                <li class = "showDays2">Wednesday - Friday</li>
                                <ul>
                                    <li class = "showTimes2">6pm</li>
                                </ul>
                                <li class = "showDays3">Saturday - Sunday</li>
                                <ul>
                                    <li class = "showTimes3">12pm</li>
                                </ul>
                            </ul>
                            <form action="booking.php" method="GET" id="bookNowForm">
                                <input type="hidden" name="Puss in Boots: The Last Wish" value="FAM">
                                <input type="submit" value="Book Now" id="bookNowButton">
                            </form>
                        </div>
                    </div>


                    <div class="showInfoGrid" id = "Margrete: Queen of the North">
                        <div class='card3D'>
                            <div class="showImage">
                                <img class="sc-7c0a9e7c-0 fEIEer peek" src="https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY474_.jpg 319w, https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY711_.jpg 479w, https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY337_.jpg 227w, https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY576_.jpg 388w, https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY720_.jpg 486w" data-image-id="rm2658194945-prev" alt="Trine Dyrholm in Margrete - Queen of the North (2021)">
                            </div>
                            <div>
                                <article class = "showPlot">
                                    <p>1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted
                                        son, Erik. But a conspiracy is in the making and Margrete finds herself in an
                                        impossible dilemma that could shatter her life's work: the Kalmar Union.
                                    </p>
                                </article>
                            </div>
                        </div>
                        <div class="showDetails">
                            <h4 class = "showTitle">Margrete: Queen of the North</h4>
                            <span class = "showRating">Rating: MA 15+</span>
                            <ul>
                                <li class = "showDays1">Monday - Tuesday</li>
                                <ul>
                                    <li class = "showTimes1">6pm</li>
                                </ul>

                                <li class = "showDays2">Wednesday - Friday</li>
                                <ul>
                                    <li class = "showTimes2"> - </li>
                                </ul>
                                <li class = "showDays3">Saturday - Sunday</li>
                                <ul>
                                    <li class = "showTimes3">10pm</li>
                                </ul>
                            </ul>
                            <form action="booking.php" method="GET" id="bookNowForm">
                                <input type="hidden" name="Margrete: Queen of the North" value="AHF">
                                <input type="submit" value="Book Now" id="bookNowButton">
                            </form>
                        </div>
                    </div>
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
