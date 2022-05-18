<?php
//session_start();

//if (isset($_SESSION['userid']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/dashboard.css" />
    <title>Dashboard</title>
</head>

<body>
    <?php

    function cardElements($link, $icon, $title)
    {
        $elements = " 
        <a href=$link>
        <div class=\"card\">
        <div class=\"card-body\">
            <img class=\"card-img\" src=$icon />
            <h2 class=\"card-title\">$title</h2>
        </div>
        
    </div>
    </a>
    ";
        echo $elements;
    }

    ?>

    <div class="header">
        <a href="dashboard.php">
            <h1 class="company">Senity Security System</h1>
        </a>


        <div class="logoutDiv">
            <a href="index.php">
                <h1 class="logout">Log out</h1>
            </a>
        </div>

    </div>
    <h1 class="welcome">Welcome back! <?php //echo $_SESSION['username']; 
                                        ?></h1>

    <div class="cardsDiv">
        <?php
        /* $link = '#';
            if ($_SESSION['userid'] == 1) {
                $link = 'senityusers.php';
            } else {
                $link = '#';
            }*/
        ?>

        <?php cardElements(link: "senityusers.php", icon: "./Pictures/senity_users.png", title: "Senity Users"); ?>
        <?php cardElements(link: "cards.php", icon: "./Pictures/senity_cards.png", title: "Cards"); ?>
        <?php cardElements(link: "events.php", icon: "./Pictures/senity_events.png", title: "Events"); ?>
        <?php cardElements(link: "#", icon: "./Pictures/senity_analysis.png", title: "Analysis"); ?>
        <?php cardElements(link: "#", icon: "./Pictures/senity_settings.png", title: "Settings"); ?>


    </div>

    <div class="space"></div>

    <?php

    $year = (new DateTime)->format("Y");

    ?>
    <div class="footer">
        <h3 class="companyltd" id="">©<?php echo $year ?> Senity Security System Ltd. </h3>



        <div class="light"></div>
        <h3 class="programmer"> Programmed and Designed By Nikolett Gal</h3>
    </div>
    <script src="./JS/vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 40,
            speed: 400,
            glare: true,

        });
    </script>
</body>

</html>

<?php
//} else {
//}
?>