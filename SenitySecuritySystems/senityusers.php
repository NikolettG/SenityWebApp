<?php require_once 'process.php'; ?>

<?php

$mysqli = new mysqli('localhost', 'root', 'rootroot', 'senity') or die(mysqli_error($mysqli));

$result = $mysqli->query("Select * From senity_users") or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/senityusers.css" />
    <link rel="stylesheet" href="./Style/senityusersMedia.css" />

    <title>Users of Senity</title>
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
        <h1 class="welcome">Users of Senity</h1>

        <?php require_once 'process.php'; ?>

        <div class="formdiv" id="usersForm">
            <form action="senityusers.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $id; ?>"> <br>
                <div>
                    <label>Username</label><br>
                    <input type=" text" name="username" value="<?php echo $username; ?>">
                </div><br>

                <div>
                    <label>Password</label><br>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </div><br>

                <div>
                    <label>Email</label><br>
                    <input type=" text" name="email" value="<?php echo $email; ?>">
                </div><br>

                <div>
                    <label>Privilege</label><br>
                    <input type="text" name="privilegesid" value="<?php echo $privilegesid; ?>">
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

        <div class="tablediv" id="users">
            <table class="table table-borderless justify-content-center">
                <thead class="head">
                    <tr>
                        <th class="tableText">User ID</th>
                        <th>Username</th>

                        <th>Email</th>
                        <th>Priviliges ID</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php
                while ($row = $result->fetch_assoc()) : ?>

                    <tr>
                        <td><?php echo $row['userid']; ?></td>
                        <td><?php echo $row['username']; ?></td>

                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['privilegesid']; ?></td>
                        <td>
                            <a href="senityusers.php?edit=<?php echo $row['userid']; ?>" class="btn btn-info">Edit</a>
                            <a href="senityusers.php?delete=<?php echo $row['userid']; ?>" class="btn btn-danger">Delete</a>
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