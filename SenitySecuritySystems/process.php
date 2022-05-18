<?php



$username = '';
$password = '';
$email = '';
$privilegesid = '';


$mysqli = new mysqli('localhost', 'root', 'rootroot', 'senity') or die(mysqli_error($mysqli));



if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $privilegesid = $_POST['privilegesid'];

    $mysqli->query("INSERT INTO senity_users (username, password, email, privilegesid) VALUES('$username', '$password', '$email', '$privilegesid')") or die($mysqli->error);
    header("location: senityusers.php");
    exit;
}

$update = false;
$id = 0;



if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("Delete From senity_users Where userid=$id") or die($mysqli->error);
}


if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("Select * From senity_users Where userid=$id") or die($mysqli->error);



    if ($result == true) {
        $row = $result->fetch_array();
        $username = $row['username'];
        $password = $row['password'];
        $email = $row['email'];
        $privilegesid = $row['privilegesid'];
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $privilegesid = $_POST['privilegesid'];

    $mysqli->query("UPDATE senity_users SET  
                                            username='$username', 
                                            password='$password', 
                                            email='$email', 
                                            privilegesid='$privilegesid' 
                                        WHERE userid=$id")
        or die($mysqli->error);
}
