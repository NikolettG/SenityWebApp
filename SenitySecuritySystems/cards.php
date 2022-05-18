<?php require_once 'processCards.php'; ?>

<?php

$mysqli = new mysqli('localhost', 'root', 'rootroot', 'senity') or die(mysqli_error($mysqli));

$result = $mysqli->query("Select * From cards") or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/senityusers.css" />
    <link rel="stylesheet" href="./Style/cardsMedia.css" />

    <title>Cards</title>
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
        <h1 class="welcome">Cards</h1>

        <?php require_once 'processCards.php'; ?>

        <div class="formdiv" id="cardsform">
            <form action="cards.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $id; ?>"> <br>


                <div>
                    <label>Firstname</label><br>
                    <input type="text" name="firstname" value="<?php echo $firstname; ?>">
                </div><br>

                <div>
                    <label>Lastname</label><br>
                    <input type=" text" name="lastname" value="<?php echo $lastname; ?>">
                </div><br>

                <div>
                    <label>UID</label><br>
                    <input type="text" name="uid" value="<?php echo $uid; ?>">
                </div><br>
                <div>
                    <label>PhoneID</label><br>
                    <input type="text" name="phoneid" value="<?php echo $phoneid; ?>">
                </div><br>

                <?php
                if ($update == true) :
                ?>

                    <button type="submit" class="btn" name='update'>Update</button>

                <?php else : ?>
                    <button type="submit" class="btn" name='save'>Save</button>
                <?php endif; ?>

            </form>
        </div>

        <div class="tablediv" id="cardstable">
            <table class="table table-borderless justify-content-center">
                <thead class="head">
                    <tr>
                        <th class="tableText">ID</th>
                        <th>Timestamp</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>UID</th>
                        <th>PhoneID</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php
                while ($row = $result->fetch_assoc()) : ?>

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['timestamp']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['uid']; ?></td>
                        <td><?php echo $row['phoneid']; ?></td>
                        <td>
                            <a href="cards.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                            <a href="cards.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
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