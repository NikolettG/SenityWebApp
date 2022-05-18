<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/index.css" />

    <title>Log In to Senity</title>

</head>

<body>

    <h1 id="companynametitle">Senity Security System</h1>
    <video src="./Pictures/vd1.mp4" muted loop autoplay></video>
    <div class="login-box">
        <h2 class="title">Sign in</h2>


        <form class="form" action="login.php" method="POST">
            <div class="user-box">
                <input type="text" name="uname" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="pword" required="">
                <label>Password</label>
            </div>
            <button class="btn" type="submit">
                <div>
                    <a class="neon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </a>
                </div>
            </button>
        </form>
    </div>
    <?php

    $year = (new DateTime)->format("Y");

    ?>
    <div id="ownerbox">

        <h3 id="company">©<?php echo $year ?> Senity Security System Ltd.</h3>
        <h3 id="programmer">Programmed & Designed by Nikolett Gal</h3>

    </div>


</body>

</html>