<?php require_once 'processEvents.php'; ?>

<?php

$mysqli = new mysqli('localhost', 'root', 'rootroot', 'senity') or die(mysqli_error($mysqli));

$result = $mysqli->query("Select * From loggate") or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/senityusers.css" />
    <link rel="stylesheet" href="./Style/eventsMedia.css" />

    <title>Events</title>
</head>

<body>
    <div class="header">
        <a href="dashboard.php">
            <h1 class="company">Senity Security System</h1>
        </a>


        <div class="logoutDiv">
            <a href="index.php">
                <h1 class="logout">Log out</h1>
            </a>
        </div>
        <h1 class="welcome">Events</h1>



        <div class="tablediv" id="eventsTable">
            <table class="table table-borderless justify-content-center">
                <thead class="head">
                    <tr>
                        <th class="tableText">LogID</th>
                        <th>Userid</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>UID</th>
                        <th>Server Time</th>
                        <th>Hardware Time</th>
                        <th>Event</th>

                    </tr>
                </thead>

                <?php
                while ($row = $result->fetch_assoc()) : ?>

                    <tr>
                        <td><?php echo $row['logid']; ?></td>
                        <td><?php echo $row['userid']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['uid']; ?></td>
                        <td><?php echo $row['servertime']; ?></td>
                        <td><?php echo $row['hardwaretime']; ?></td>
                        <td><?php echo $row['event']; ?></td>

                    </tr>

                <?php endwhile; ?>
            </table>
        </div>

        <div class="space"></div>
        <?php

        function pre_r($array)
        {
            echo '<pre>';
            print_r($array);
        }

        ?>
        <?php
        $year = (new DateTime)->format("Y");

        ?>

        <div class="footer">
            <h3 class="companyltd" id="">©<?php echo $year ?> Senity Security System Ltd. </h3>



            <div class="light"></div>
            <h3 class="programmer"> Programmed and Designed By Nikolett Gal</h3>
        </div>
</body>

</html>