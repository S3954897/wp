<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Booking Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
      <script src='script.js'></script>
      <?php include 'tools.php'; ?>
  </head>

  <body>
    <?php
    //maintaining show selection whilst on the bookings page. It will reset if returning back to the index page
    if(isset($_SESSION["show"])) {
        $show = $_SESSION["show"];

    } else {
        $show = $_GET["show"];
        $_SESSION["show"] = $show;
    }
        if (isset($movies)) {
            foreach ($movies as $movie) {
                if ($show === $movie->code){
                    $movieCodeChecker = $movie->code;


    ?>
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
                                        <?php
                                            $movieSelectCode = false;
                                            $movieDay = false;
                                            $movieSeatselect = false;
                                            $userDetails = false;
                                            $sessionTimeIndex = 0;
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                if (isset($_POST) && ($movie->code == $movieCodeChecker)) {
                                                    $movieSelectCode = true;
                                                } else {
                                                    header("Location: index.php");
                                                }
                                                if (isset($_POST["day"]) && !empty($_POST["day"])) {
                                                    $validRadioValues = $movie->sessionDaysAndTimes;
                                                     //Check if the selected value matches one of the expected values
                                                    if (in_array($_POST["day"], ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"])) {
                                                        switch ($_POST["day"]) {
                                                            case "MON":
                                                                if (is_numeric($movie->sessionDaysAndTimes[0])) {
                                                                    $movieDay = true;
                                                                    $sessionTimeIndex = 0;
                                                                }
                                                                break;
                                                            case "TUE":
                                                                if (is_numeric($movie->sessionDaysAndTimes[1])) {
                                                                    $movieDay = true;
                                                                    $sessionTimeIndex = 1;
                                                                }
                                                                break;
                                                            case "WED":
                                                                if (is_numeric($movie->sessionDaysAndTimes[2])) {
                                                                    $movieDay = true;
                                                                    $sessionTimeIndex = 2;
                                                                }
                                                                break;
                                                            case "THU":
                                                                if (is_numeric($movie->sessionDaysAndTimes[3])) {
                                                                    $movieDay = true;
                                                                    $sessionTimeIndex = 3;
                                                                }
                                                                break;
                                                            case "FRI":
                                                                if (is_numeric($movie->sessionDaysAndTimes[4])) {
                                                                    $movieDay = true;
                                                                    $sessionTimeIndex = 4;
                                                                }
                                                                break;
                                                            case "SAT":
                                                                if (is_numeric($movie->sessionDaysAndTimes[5])) {
                                                                    $movieDay = true;
                                                                    $sessionTimeIndex = 5;
                                                                }
                                                                break;
                                                            case "SUN":
                                                                if (is_numeric($movie->sessionDaysAndTimes[6])) {
                                                                    $movieDay = true;
                                                                    $sessionTimeIndex = 6;
                                                                }
                                                                break;
                                                            default:
                                                                header("Location: index.php");
                                                                break;
                                                        }

                                                    } else {
                                                        header("Location: index.php");
                                                    }
                                                } else {
                                                    echo '<script>showAlert("You must select a day!!");</script>';
                                                }
                                                if (isset($seatSelection)) {
                                                    $aSeatSelected = 0;
                                                    $seatAndValueIndex = 0;
                                                    $seatTypeName = array();
                                                    $logSeatTypeName = array();
                                                    $seatTypeValue = array();
                                                    $seatTypePrice = array();


                                                    foreach ($seatSelection as $seatSelected) {
                                                        $seatName = "seats{$seatSelected->seatTypeID}";
                                                        $value = (int)$_POST[$seatName];
                                                        $seatTypeName[$seatAndValueIndex] = $seatName;
                                                        $seatTypeValue[$seatAndValueIndex] = $value;
                                                        if (($value > 0 && $value < 11)) {
                                                            $aSeatSelected = 1;
                                                        } else if ($value < 0 || $value > 10) {
                                                            header("Location: index.php");
                                                        }
                                                        $seatAndValueIndex ++;
                                                    }
                                                    if ($aSeatSelected == 0) {
                                                        echo '<script>showAlert("You must select a seat");</script>';
                                                    } else if ($aSeatSelected == 1) {
                                                        $movieSeatselect = true;
                                                    }
                                                }

                                                if (isset($_POST['user'])){
                                                    $userDetails = regexCheck($_POST['user']['name'], $_POST['user']['email'], $_POST['user']['mobile']);
                                                }
                                                reloadData();
                                                $formData = $_SESSION["form_data"];

                                                if ($movieCodeChecker && $movieDay && $movieSeatselect && $userDetails) {
                                                    $currentDate = date('d-m-Y');
                                                    $selectedDay = $formData['day'];
                                                    $logSeatPrice = 0;


                                                    switch ($selectedDay){
                                                        case "MON":
                                                            if ($formData['monPricing'] == "discprice") {
                                                                $seatTypePrice[0] = 16;
                                                                $seatTypePrice[1] = 14.5;
                                                                $seatTypePrice[2] = 13;
                                                                $seatTypePrice[3] = 25;
                                                                $seatTypePrice[4] = 23.5;
                                                                $seatTypePrice[5] = 22;
                                                            } elseif ($formData['monPricing'] == "fullprice") {
                                                                $seatTypePrice[0] = 21.5;
                                                                $seatTypePrice[1] = 19;
                                                                $seatTypePrice[2] = 17.5;
                                                                $seatTypePrice[3] = 31;
                                                                $seatTypePrice[4] = 28;
                                                                $seatTypePrice[5] = 25;
                                                            }
                                                            break;
                                                        case "TUE":
                                                            if ($formData['tuePricing'] == "discprice") {
                                                                $seatTypePrice[0] = 16;
                                                                $seatTypePrice[1] = 14.5;
                                                                $seatTypePrice[2] = 13;
                                                                $seatTypePrice[3] = 25;
                                                                $seatTypePrice[4] = 23.5;
                                                                $seatTypePrice[5] = 22;
                                                            } elseif ($formData['tuePricing'] == "fullprice") {
                                                                $seatTypePrice[0] = 21.5;
                                                                $seatTypePrice[1] = 19;
                                                                $seatTypePrice[2] = 17.5;
                                                                $seatTypePrice[3] = 31;
                                                                $seatTypePrice[4] = 28;
                                                                $seatTypePrice[5] = 25;
                                                            }
                                                            break;
                                                        case "WED":
                                                            if ($formData['wedPricing'] == "discprice") {
                                                                $seatTypePrice[0] = 16;
                                                                $seatTypePrice[1] = 14.5;
                                                                $seatTypePrice[2] = 13;
                                                                $seatTypePrice[3] = 25;
                                                                $seatTypePrice[4] = 23.5;
                                                                $seatTypePrice[5] = 22;
                                                            } elseif ($formData['wedPricing'] == "fullprice") {
                                                                $seatTypePrice[0] = 21.5;
                                                                $seatTypePrice[1] = 19;
                                                                $seatTypePrice[2] = 17.5;
                                                                $seatTypePrice[3] = 31;
                                                                $seatTypePrice[4] = 28;
                                                                $seatTypePrice[5] = 25;
                                                            }
                                                            break;
                                                        case "THU":
                                                            if ($formData['thuPricing'] == "discprice") {
                                                                $seatTypePrice[0] = 16;
                                                                $seatTypePrice[1] = 14.5;
                                                                $seatTypePrice[2] = 13;
                                                                $seatTypePrice[3] = 25;
                                                                $seatTypePrice[4] = 23.5;
                                                                $seatTypePrice[5] = 22;
                                                            } elseif ($formData['thuPricing'] == "fullprice") {
                                                                $seatTypePrice[0] = 21.5;
                                                                $seatTypePrice[1] = 19;
                                                                $seatTypePrice[2] = 17.5;
                                                                $seatTypePrice[3] = 31;
                                                                $seatTypePrice[4] = 28;
                                                                $seatTypePrice[5] = 25;
                                                            }
                                                            break;
                                                        case "FRI":
                                                            if ($formData['friPricing'] == "discprice") {
                                                                $seatTypePrice[0] = 16;
                                                                $seatTypePrice[1] = 14.5;
                                                                $seatTypePrice[2] = 13;
                                                                $seatTypePrice[3] = 25;
                                                                $seatTypePrice[4] = 23.5;
                                                                $seatTypePrice[5] = 22;
                                                            } elseif ($formData['friPricing'] == "fullprice") {
                                                                $seatTypePrice[0] = 21.5;
                                                                $seatTypePrice[1] = 19;
                                                                $seatTypePrice[2] = 17.5;
                                                                $seatTypePrice[3] = 31;
                                                                $seatTypePrice[4] = 28;
                                                                $seatTypePrice[5] = 25;
                                                            }
                                                            break;
                                                        case "SAT":
                                                            if ($formData['satPricing'] == "discprice") {
                                                                $seatTypePrice[0] = 16;
                                                                $seatTypePrice[1] = 14.5;
                                                                $seatTypePrice[2] = 13;
                                                                $seatTypePrice[3] = 25;
                                                                $seatTypePrice[4] = 23.5;
                                                                $seatTypePrice[5] = 22;
                                                            } elseif ($formData['satPricing'] == "fullprice") {
                                                                $seatTypePrice[0] = 21.5;
                                                                $seatTypePrice[1] = 19;
                                                                $seatTypePrice[2] = 17.5;
                                                                $seatTypePrice[3] = 31;
                                                                $seatTypePrice[4] = 28;
                                                                $seatTypePrice[5] = 25;
                                                            }
                                                            break;
                                                        case "SUN":
                                                            if ($formData['sunPricing'] == "discprice") {
                                                                $seatTypePrice[0] = 16;
                                                                $seatTypePrice[1] = 14.5;
                                                                $seatTypePrice[2] = 13;
                                                                $seatTypePrice[3] = 25;
                                                                $seatTypePrice[4] = 23.5;
                                                                $seatTypePrice[5] = 22;
                                                            } elseif ($formData['sunPricing'] == "fullprice") {
                                                                $seatTypePrice[0] = 21.5;
                                                                $seatTypePrice[1] = 19;
                                                                $seatTypePrice[2] = 17.5;
                                                                $seatTypePrice[3] = 31;
                                                                $seatTypePrice[4] = 28;
                                                                $seatTypePrice[5] = 25;
                                                            }
                                                            break;
                                                        default:
                                                            header("Location: index.php");
                                                    }

                                                    $seatPriceTotal = 0;
                                                    for ($i=0; $i<6; $i++) {
                                                        $seatPriceTotal += ($seatTypePrice[$i]*$seatTypeValue[$i]);
                                                    }
                                                    $seatPriceTotalGST = $seatPriceTotal/11;


                                                    $selectedMovieTime = date("g a", strtotime(($movie->sessionDaysAndTimes[$sessionTimeIndex]) . ":00"));


                                                    $data = ($currentDate."\t".$formData['user']['name']."\t".$formData['user']['email']."\t".$formData['user']['mobile'].
                                                        "\t".$movieCodeChecker."\t".$formData['day']."\t".$selectedMovieTime."\t"
                                                        .$seatTypeValue[0]."\t".number_format($seatTypePrice[0]*$seatTypeValue[0],2)
                                                        ."\t".$seatTypeValue[1]."\t".number_format($seatTypePrice[1]*$seatTypeValue[1],2)
                                                        ."\t".$seatTypeValue[2]."\t".number_format($seatTypePrice[2]*$seatTypeValue[2],2)
                                                        ."\t".$seatTypeValue[3]."\t".number_format($seatTypePrice[3]*$seatTypeValue[3],2)
                                                        ."\t".$seatTypeValue[4]."\t".number_format($seatTypePrice[4]*$seatTypeValue[4],2)
                                                        ."\t".$seatTypeValue[5]."\t".number_format($seatTypePrice[5]*$seatTypeValue[5],2)
                                                        . "\t".number_format($seatPriceTotal,2)."\t".number_format($seatPriceTotalGST,2)."\n");
                                                    $dataArray = array($currentDate,$formData['user']['name'],$formData['user']['email'], $formData['user']['mobile']
                                                        , $movieCodeChecker, $formData['day'], $selectedMovieTime
                                                        , $seatTypeValue[0], number_format($seatTypePrice[0]*$seatTypeValue[0],2)
                                                        , $seatTypeValue[1], number_format($seatTypePrice[1]*$seatTypeValue[1],2)
                                                        , $seatTypeValue[2], number_format($seatTypePrice[2]*$seatTypeValue[2],2)
                                                        , $seatTypeValue[3], number_format($seatTypePrice[3]*$seatTypeValue[3],2)
                                                        , $seatTypeValue[4], number_format($seatTypePrice[4]*$seatTypeValue[4],2)
                                                        , $seatTypeValue[5], number_format($seatTypePrice[5]*$seatTypeValue[5],2)
                                                        , number_format($seatPriceTotal,2), number_format($seatPriceTotalGST,2));


                                                    file_put_contents("bookings.txt", $data, FILE_APPEND);
                                                    dataParse($dataArray);

                                                    header("Location: receipt.php");

                                                }

                                            }

                                        ?>
                                        <h3>Booking</h3>
                                        <h3><?php echo $movie->title ?></h3>
                                        <form id="movieBooking" onsubmit="return validateForm()" action="booking.php" method="post">
                                            <input type="hidden" name="<?php $movie->title?>">
                                            <input type="hidden" name="<?php $movieCodeChecker?>">
                                                <?php
                                                    if (isset($seatSelection)) {
                                                        foreach ($seatSelection as $seatSelected) { ?>
                                                            <label for="<?php echo $seatSelected->seatTypeID; ?>"><?php echo $seatSelected->type; ?></label>
                                                            <select onchange="calcPrice()" id="<?php echo $seatSelected->seatTypeID; ?>" name="seats<?php echo $seatSelected->seatTypeID; ?>">
                                                                <option value="0">Select an option</option>
                                                                <option value="1" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "1") {echo "selected";} ?>>1</option>
                                                                <option value="2" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "2") {echo "selected";} ?>>2</option>
                                                                <option value="3" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "3") {echo "selected";} ?>>3</option>
                                                                <option value="4" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "4") {echo "selected";} ?>>4</option>
                                                                <option value="5" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "5") {echo "selected";} ?>>5</option>
                                                                <option value="6" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "6") {echo "selected";} ?>>6</option>
                                                                <option value="7" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "7") {echo "selected";} ?>>7</option>
                                                                <option value="8" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "8") {echo "selected";} ?>>8</option>
                                                                <option value="9" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "9") {echo "selected";} ?>>9</option>
                                                                <option value="10" <?php echo $seatSelected->price; if (isset($_SESSION["form_data"]) && isset($_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"]) && $_SESSION["form_data"]["seats{$seatSelected->seatTypeID}"] == "10") {echo "selected";} ?>>10</option>
                                                            </select>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                                <fieldset onchange="calcPrice()" id="daySelection">
                                                    <legend target="_blank">Session times</legend>
                                                    <input type="radio" id="monday" name="day" value="MON" data-pricing="discprice" <?php if (isset($formData["day"]) && $formData["day"] == 'MON') { echo "checked"; } ?> >
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
                                                    <input type="hidden" name="monPricing" value="discprice">
                                                    <input type="radio" id="tuesday" name="day" value="TUE" <?php
                                                    $time = $movie->sessionDaysAndTimes[1];
                                                    if ($time == 12){
                                                            $tuePricing = "discprice";
                                                            echo 'data-pricing="discprice"';
                                                        } else {
                                                            $tuePricing = "fullprice";
                                                            echo 'data-pricing="fullprice"';
                                                        }
                                                    if (isset($formData["day"]) && $formData["day"] == "TUE") {
                                                        echo "checked";
                                                    } ?> >
                                                    <label for="tuesday"
                                                        <?php
                                                            if (is_numeric($time)) {
                                                                echo  "style='display:block'"; ?> > <?php echo "Tuesday - ", date("g:i a", strtotime($time . ":00"));
                                                            }
                                                            else {
                                                                echo "style='display:none'" ;?> > <?php
                                                            }
                                                        ?>
                                                    </label>
                                                    <input type="hidden" name="tuePricing" value=<?php echo $tuePricing;?> >
                                                    <input type="radio" id="wednesday" name="day" value="WED" <?php
                                                    $time = $movie->sessionDaysAndTimes[2];
                                                    if ($time == 12){
                                                        $wedPricing = "discprice";
                                                        echo 'data-pricing="discprice"';
                                                    } else {
                                                        $wedPricing = "fullprice";
                                                        echo 'data-pricing="fullprice"';
                                                    }
                                                    if (isset($formData["day"]) && $formData["day"] == "WED") {
                                                        echo "checked";
                                                    } ?> >
                                                    <label for="wednesday"
                                                        <?php
                                                            if (is_numeric($time)) {
                                                                echo  "style='display:block'"; ?> > <?php echo "Wednesday - ", date("g:i a", strtotime($time . ":00"));
                                                            } else {
                                                                echo "style='display:none'" ;?> > <?php
                                                            }
                                                        ?>
                                                    </label>
                                                    <input type="hidden" name="wedPricing" value=<?php echo $wedPricing;?> >
                                                    <input type="radio" id="thursday" name="day" value="THU" <?php
                                                    $time = $movie->sessionDaysAndTimes[3];
                                                    if ($time == 12){
                                                        $thuPricing = "discprice";
                                                        echo 'data-pricing="discprice"';
                                                    } else {
                                                        $thuPricing = "fullprice";
                                                        echo 'data-pricing="fullprice"';
                                                    }
                                                    if (isset($formData["day"]) && $formData["day"] == "THU") {
                                                        echo "checked";
                                                    } ?> >
                                                    <label for="thursday"
                                                        <?php
                                                            if (is_numeric($time)) {
                                                                echo  "style='display:block'"; ?> > <?php echo "Thursday - ", date("g:i a", strtotime($time . ":00"));
                                                            }
                                                            else {
                                                                echo "style='display:none'" ;?> > <?php
                                                            }
                                                        ?>
                                                    </label>
                                                    <input type="hidden" name="thuPricing" value=<?php echo $thuPricing;?> >
                                                    <input type="radio" id="friday" name="day" value="FRI" <?php
                                                    $time = $movie->sessionDaysAndTimes[4];
                                                    if ($time == 12){
                                                        $friPricing = "discprice";
                                                        echo 'data-pricing="discprice"';
                                                    } else {
                                                        $friPricing = "fullprice";
                                                        echo 'data-pricing="fullprice"';
                                                    }
                                                    if (isset($formData["day"]) && $formData["day"] == "FRI") {
                                                        echo "checked";
                                                    } ?> >
                                                    <label for="friday"
                                                        <?php
                                                            if (is_numeric($time)) {
                                                                echo  "style='display:block'"; ?> > <?php echo "Friday - ", date("g:i a", strtotime($time . ":00"));
                                                            }
                                                            else {
                                                                echo "style='display:none'" ;?> > <?php
                                                            }
                                                        ?>
                                                    </label>
                                                    <input type="hidden" name="friPricing" value=<?php echo $friPricing;?> >
                                                    <input type="radio" id="saturday" name="day" value="SAT" data-pricing="fullprice" <?php if (isset($formData["day"]) && $formData["day"] == "SAT") { echo "checked"; } ?> >
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
                                                    <input type="hidden" name="satPricing" value="fullprice">
                                                    <input type="radio" id="sunday" name="day" value="SUN" data-pricing="fullprice" <?php if (isset($formData["day"]) && $formData["day"] == "SUN") { echo "checked"; } ?> >
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
                                                    <input type="hidden" name="sunPricing" value="fullprice">
                                                </fieldset>
                                                <h3>Customer Detail</h3>
                                                <label for="user[name]">Full Name</label>
                                                <input type="text" id="user[name]" name="user[name]" placeholder="Enter your full name"
                                                       value="<?php echo isset($_SESSION['form_data']['user']['name']) ? $_SESSION['form_data']['user']['name'] : ''; ?>">
                                                <br>
                                                <label for="user[email]">Email</label>
                                                <input type="text" id="user[email]" name="user[email]" placeholder="Enter your email"
                                                       value="<?php echo isset($_SESSION['form_data']['user']['email']) ? $_SESSION['form_data']['user']['email'] : ''; ?>">
                                                <br>
                                                <label for="user[mobile]">Mobile</label>
                                                <input type="text" id="user[mobile]" name="user[mobile]" placeholder="Enter your mobile"
                                                       value="<?php echo isset($_SESSION['form_data']['user']['mobile']) ? $_SESSION['form_data']['user']['mobile'] : ''; ?>">
                                                <br>
                                                <div>
                                                    <fieldset>
                                                        <input type="radio" id="rememberMe" name="rememberMe">
                                                        <label for="rememberMe">Remember me</label>
                                                        <input type="radio" id="forgetMe" name="rememberMe">
                                                        <label for="forgetMe">Forget me</label>
                                                    </fieldset>
                                                </div>
                                                <br>
                                                <button type="submit">Submit your Booking</button>
                                        </form>
                                    </div>
                                    <div class="showInfoFull">
                                        <h3><?php echo $movie->title; ?></h3>
                                        <p><?php echo $movie->descriptionFull; ?></p>
                                        <p><?php echo $movie->directors; ?></p>
                                        <p><?php echo $movie->writers; ?></p>
                                        <p><?php echo $movie->actors; ?></p>
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

                <?php }
            }

        }
    header("Location: index.php");
  ?>
  </body>
</html>
