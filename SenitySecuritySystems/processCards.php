<?php




$firstname = '';
$lastname = '';
$uid = '';
$phoneid = '';


$mysqli = new mysqli('localhost', 'root', 'rootroot', 'senity') or die(mysqli_error($mysqli));

$update = false;
$id = 0;




if (isset($_POST['save'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $uid = $_POST['uid'];
    $phoneid = $_POST['phoneid'];

    $mysqli->query("INSERT INTO cards (firstname, lastname, uid, phoneid) VALUES('$firstname', '$lastname', '$uid', '$phoneid')") or die($mysqli->error);
    header("location: cards.php");
    exit;
}



if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("Delete From cards Where id=$id") or die($mysqli->error);
}


if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("Select * From cards Where id=$id") or die($mysqli->error);



    if ($result == true) {
        $row = $result->fetch_array();
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $uid = $row['uid'];
        $phoneid = $row['phoneid'];
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $uid = $_POST['uid'];
    $phoneid = $_POST['phoneid'];

    $mysqli->query("UPDATE cards SET 
                                            firstname='$firstname', 
                                            lastname='$lastname', 
                                            uid='$uid', 
                                            phoneid='$phoneid'
                                        WHERE id=$id")
        or die($mysqli->error);
}
