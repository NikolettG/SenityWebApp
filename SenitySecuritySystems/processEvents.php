<?php




$firstname = '';
$lastname = '';
$uid = '';



$mysqli = new mysqli('localhost', 'root', 'rootroot', 'senity') or die(mysqli_error($mysqli));

$update = false;
$logid = 0;



/*
if (isset($_POST['save'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $uid = $_POST['uid'];


    $mysqli->query("INSERT INTO cards (firstname, lastname, uid) VALUES('$firstname', '$lastname', '$uid')") or die($mysqli->error);
    header("location: events.php");
    exit;
}
*/


if (isset($_GET['delete'])) {
    $logid = $_GET['delete'];
    $mysqli->query("Delete From loggate Where logid=$logid") or die($mysqli->error);
}

/*
if (isset($_GET['edit'])) {
    $logid = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("Select * From loggate Where logid=$logid") or die($mysqli->error);



    if ($result == true) {
        $row = $result->fetch_array();
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $uid = $row['uid'];
    }
}
*/
if (isset($_POST['update'])) {
    $logid = $_POST['logid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $uid = $_POST['uid'];


    $mysqli->query("UPDATE loggate SET 
                                            firstname='$firstname', 
                                            lastname='$lastname', 
                                            uid='$uid', 
                                           
                                        WHERE logid=$logid")
        or die($mysqli->error);
}
