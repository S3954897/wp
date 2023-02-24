<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo - Receipt</title>

<!--     Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link rel="stylesheet" href="print.css" media="print">
    <?php include 'tools.php'; ?>

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
                <td><?php echo $_SESSION['data'][0]; ?></td>
                <td><?php echo $_SESSION['data'][1]; ?></td>
                <td><?php echo $_SESSION['data'][2]; ?></td>
                <td><?php echo $_SESSION['data'][3]; ?></td>
                <td><?php echo $_SESSION['data'][4]; ?></td>
                <td><?php echo $_SESSION['data'][5]; ?></td>
                <td><?php echo $_SESSION['data'][6]; ?></td>
                <td><?php echo $_SESSION['data'][7]; ?></td>
                <td><?php echo $_SESSION['data'][9]; ?></td>
                <td><?php echo $_SESSION['data'][11]; ?></td>
                <td><?php echo $_SESSION['data'][13]; ?></td>
                <td><?php echo $_SESSION['data'][15]; ?></td>
                <td><?php echo $_SESSION['data'][17]; ?></td>
                <td><?php echo $_SESSION['data'][19]; ?></td>
                <td><?php echo $_SESSION['data'][20]; ?></td>
            </tr>
        </tbody>
    </table>
</body>



