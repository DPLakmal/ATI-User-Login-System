<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        input {
            font-family: 'Poppins', sans-serif;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="" style='display: flex;  justify-content: center; align-items: center; '>
        <h1>DashBoard</h1>
        <br>
        <div class="">

            <?php
            include 'database.php';
            $selectQuery = "SELECT * FROM lecturer";
            $result = mysqli_query($connection, $selectQuery);
            if (mysqli_num_rows($result) > 0) {
                while ($record = mysqli_fetch_row($result)) {
                    echo $record[0] . " " . $record[1] . " " . $record[2] . "<br/>";
                }
            }
            echo '</div>';
            echo '<input type="button" value="Logout">';


            ?>

        </div>

</body>

</html>