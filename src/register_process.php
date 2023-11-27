<?php
include 'database.php';
$name = $_POST["name"];

echo $name."";
if (
    true)
    // !empty ($_POST["insert"])) 
{
    // Get user input
    $name = $_POST["name"];
    $email = $_POST["email"];
    $designation = $_POST["designations"];
    $courseID = $_POST["course"];
    $gender = $_POST["gender"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $sql = "INSERT INTO Lecturer (Name, Email, Designation, CourseID, Gender, Password) VALUES ('$name', '$email', '$designation', '$courseID', '$gender', '$password')";

        $result=mysqli_query($connection,$sql);
    if (!$result) {
        die ("Values not inserted");
    }  {
        echo "Inserted Successfully";
    }

}

header("Location: login.php");
?>