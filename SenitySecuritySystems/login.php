<?php
include "db_conn.php";
echo 'hello';
if (isset($_POST['uname']) && isset($_POST['pword'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pword']);

    if (empty($uname)) {
        header("Location: index.php?error=Username is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM senity_users WHERE username='$uname' AND password='$pass' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['userid'] = $row['userid'];

                header("Location: dashboard.php");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorect username or password");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
