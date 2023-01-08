<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Home Page</title>

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
                <li><a href='#aboutUs'>About us</a></li>
                <li><a href='#seatsAndPricing'>Seats and Pricing</a></li>
                <li><a href='#nowShowing'>Now Showing</a></li>
            </ul>
        </nav>
    </div>

    <div class="mainArea">
        <main>

            <div class = 'aboutUsArea'>
                <article id='aboutUs'>
                    <h2>About us</h2>
                        <h3>Reopening</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        <h3>All new seating</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        <h3>State of the art Projection and Sound</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                    </article>
            </div>

            <div class = 'seatsAndPricesArea'>

                <article class = "seatsAndPricesGrid" id= "seatsAndPricing">
                    <h2>Seats and Pricing</h2>
                    <p>
                        The Cinema offers discounted pricing weekday afternoons (12pm weekdays matinée sessions)
                        and all day on Mondays.
                    </p>
                    <h3>Standard seat pricing</h3>
                    <img id= "standardSeatingImage"  src="/media/Profern-Standard-Twin.png">
                    <table id = "standardSeatingTable">
                        <tbody>
                            <tr><th>Type</th><th>Discount Price</th><th>Normal Price</th></tr>
                            <tr><td>Adult</td><td>$16.00</td><td>$21.50</td></tr>
                            <tr><td>Concession</td><td>$14.50</td><td>$19.00</td></tr>
                            <tr><td>Child</td><td>$13.00</td><td>$17.50</td></tr>
                        </tbody>
                    </table>
                    <h3>First class seat pricing</h3>
                    <img src="/media/Profern-Verona-Twin.png">
                    <table id="firstClassSeating">
                        <tbody>
                            <tr><th>Type</th><th>Discount Price</th><th>Normal Price</th></tr>
                            <tr><td>Adult</td><td>$16.00</td><td>$21.50</td></tr>
                            <tr><td>Concession</td><td>$14.50</td><td>$19.00</td></tr>
                            <tr><td>Child</td><td>$13.00</td><td>$17.50</td></tr>
                        </tbody>
                    </table>
                </article>
            </div>

            <div class = "nowShowingArea">
                <article id= "nowShowing">
                    <h2>Now Showing</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
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
