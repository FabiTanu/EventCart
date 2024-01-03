<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'event_fam');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if (!$connection) {
    die("connection Faild :" . mysqli_connect_error());
} else {
    echo "<script>alert('DB connected!')</script>";
}
?>


<!-- <?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "event_fam";
// $connection = mysqli_connect("$server", "$username", "$password");
// $select_db = mysqli_select_db($connection, $database);
// if (!$select_db) {
//     die("connection Faild :" . mysqli_connect_error());
// } else {
//     echo "<script>alert('DB connected!')</script>";
// }
?> -->