<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "atiweb";
$connection = mysqli_connect($server, $username, $password,$dbname);
if (!$connection) {
    echo "Successfully connected";
    die("Connection failed:" . mysqli_connect_error());
}
?>

<!-- 
// $selectQuery = "SELECT * FROM course";
// $result = mysqli_query($connection, $selectQuery);
// if (mysqli_num_rows($result) > 0) {
//     while ($record = mysqli_fetch_row($result)) {
//         echo $record[0] . " " . $record[1] . " " . $record[2] . "<br/>";
//     }
// } -->
