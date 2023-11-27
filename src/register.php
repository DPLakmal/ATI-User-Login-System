<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        input, select {
            font-family: 'Poppins', sans-serif;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
    <title>Register</title>
</head>

<body>
    <div class="" style="display: flex; justify-content: center; align-items: center; height: 100vh;">


        <form action="register_process.php" method="post" style="width:fit-content; border-radius: 5px; border: 1px solid #000; padding: 10px;">
            <h1 style="text-align: center;">Registation</h1>
            Name: <input type="text" name="name"><br><br>
            Email: <input type="text" name="email"><br><br>
            Designations: <Select name="designations">
                <option value="Assistant Lecturer">Assistant Lecturer</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Senior Lecturer I">Senior Lecturer I</option>
                <option value="Senior Lecturer II">Senior Lecturer II</option>
            </Select>
            <br><br>
            Course : <Select name="course">
                <?php
                include 'database.php';
                $result = $connection->query("SELECT * FROM Course");

                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['CourseID']}'>{$row['Title']}</option>";
                }

                $connection->close();

                ?>
               
            </Select>
            <br><br>
            Gender: <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>