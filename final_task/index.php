<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>AA - Rent a Car</title>
</head>
<body>
    
<?php 

session_start();

include 'php/config.php';
include 'php/queries.php';


?>

<div class="container">
    <div class="form-group">
        <h1>Advance Academy Rental Car</h1>
        <form method="GET">
            <div class="customers-form form-controls">
                <label for="cars">Select Vehicle</label><br>
                <select multiple name="cars" id="cars">
                    <option value="Opel">Opel</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Ford">Ford</option>
                </select>
                <br>
                <input class="btn" type="submit" name="submit" value="Submit">
                <?php
                echo "<br>","<br>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["first_name"]. " " . $row["brand"] . " " . $row["model"]. " " . $row["hire_date"];
                    echo "<br>";
                }

                // $selectedCars = $_GET['cars'];
                
                // if(mysqli_real_escape_string($conn, $selectedCars)) {
                //     echo "<br>";
                //     echo "Error";
                // }
                // if(isset($_GET['submit'])) {
                //     echo "<br>";
                //     echo $selectedCars;
                // }
                
                // mysqli_real_escape_string($conn, $selectedCars);


                ?>
            </div>

            <div class="cars-form form-controls">
                <label for="date">Select Date</label>
                <select name="date" id="date">
                    <option value="March">March</option>
                    <option value="April">April</option>
                </select><br>
                <input class="btn" type="submit" name="submit1" value="Submit">
                
                <?php 
                echo "<br>","<br>";

                while($row = mysqli_fetch_assoc($result1)) {
                    echo $row["brand"]. " " . $row["model"] . " " . $row["colour"]. " " . $row["engine_power"]. " ". $row["hire_date"]. " " . $row["return_date"];
                    echo "<br>";
                }
                
                ?>

            </div>
        </form>
    </div>
</div>

</body>
</html>