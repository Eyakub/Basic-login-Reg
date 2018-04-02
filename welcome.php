<?php
require 'db_conection.php';

$dbcon = mysqli_connect('localhost', 'root', '');
//selecting database

if (!mysqli_select_db($dbcon, 'login')) {
    //echo 'Database not selected.';
}
mysqli_select_db($dbcon, 'login');
if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);
        $email = test_input($_POST['email']);
    }
    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$login = "INSERT INTO login( email, password)" .
        "values('$email', '$password');";

$sql = "INSERT INTO user(username, email, password) " .
        "VALUES('$username', '$email', '$password') ";


//$retval = mysql_query($sql, $conn);
if (!mysqli_query($dbcon, $sql)) {
    echo '<script type="text/javascript">alert("Invalid Information.")</script>';
} else {
    mysqli_query($dbcon, $sql);
    echo '<script type="text/javascript">alert("Registration successful.")</script>';
}

//}
?>
