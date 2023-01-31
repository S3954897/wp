<!DOCTYPE html>
<html lang='en' xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lunardo Home Page</title>

        <!-- Keep wireframe.css for debugging, add your css to style.css -->
        <!--      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>-->
        <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
        <script src='script.js'></script>
        <?php include 'tools.php'; ?>
    </head>

    <body>
        <div>
            <header></header>
        </div>
        <div>
            <nav></nav>
        </div>
        <div>
            <main>
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
                                                <li class = "showTimes1"><?php echo ($movie->sessionDaysAndTimes[0]); ?></li>
                                            </ul>
                                            <li class = "showDays2">Wednesday - Friday</li>
                                            <ul>
                                                <li class = "showTimes2"><?php echo ($movie->sessionDaysAndTimes[2]); ?></li>
                                            </ul>
                                            <li class = "showDays3">Saturday - Sunday</li>
                                            <ul>
                                                <li class = "showTimes3"><?php echo ($movie->sessionDaysAndTimes[5]); ?></li>
                                            </ul>
                                        </ul>
                                    <form action="booking.php" method="GET" id="bookNowForm">
                                        <input type="hidden" name="<?php echo $movie->title; ?>" value="ACT">
                                        <input type="submit" value="Book Now" id="bookNowButton">
                                    </form>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </article>
            </main>
        </div>


    </body>

</html>