<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="footer">
        <h3 class="companyltd" id="">©<?php echo $year ?> Senity Security System Ltd. </h3>



        <div class="light"></div>
        <h3 class="programmer"> Programmed and Designed By Nikolett Gal</h3>
    </div>





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