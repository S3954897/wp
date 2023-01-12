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
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='https://titan.csit.rmit.edu.au/~s3954897/media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>
    <footer>
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
