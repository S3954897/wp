<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo - Receipt</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <!--      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>-->
    <link rel="stylesheet" href="print.css" media="print">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Movie</th>
                <th>Day</th>
                <th>Time</th>
                <th>Standard Adult Seats</th>
                <th>Standard Concession Seats</th>
                <th>Standard Child Seats</th>
                <th>First Class Adult Seats</th>
                <th>First Class Concession Seats</th>
                <th>First Class Child Seats</th>
                <th>Seat Total</th>
                <th>GST</th>
            </tr>
        </thead>
        <tbody>
            <tr>
<!--                <td>--><?php //echo $_SESSION['data']['$currentDate']; ?><!--</td>-->
                <td><?php echo $_SESSION['user']['name']; ?></td>
                <td><?php echo $_SESSION['user']['email']; ?></td>
                <td><?php echo $_SESSION['user']['mobile']; ?></td>
<!--                <td>--><?php //echo $movieCodeChecker; ?><!--</td>-->
<!--                <td>--><?php //echo $_SESSION['day']; ?><!--</td>-->
<!--                <td>--><?php //echo $selectedMovieTime; ?><!--</td>-->
<!--                <td>--><?php //echo $seatTypeValue[0]; ?><!--</td>-->
<!--                <td>--><?php //echo $seatTypeValue[1]; ?><!--</td>-->
<!--                <td>--><?php //echo $seatTypeValue[2]; ?><!--</td>-->
<!--                <td>--><?php //echo $seatTypeValue[3]; ?><!--</td>-->
<!--                <td>--><?php //echo $seatTypeValue[4]; ?><!--</td>-->
<!--                <td>--><?php //echo $seatTypeValue[5]; ?><!--</td>-->
<!--                <td>--><?php //echo number_format($seatPriceTotal, 2); ?><!--</td>-->
<!--                <td>--><?php //echo number_format($seatPriceTotalGST, 2); ?><!--</td>-->
            </tr>
        </tbody>
    </table>
</body>



