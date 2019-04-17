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

// session_start();

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
                    <?php 
                        // Fetch data from DB
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='".$row['brand']."'>".$row['brand']."</option>";
                        }
                    ?>
                </select>
                <br>
                <input class="btn" type="submit" name="submit" value="Submit">


                <?php 

                    $cars = $_GET['cars'];

                    if(isset($_GET['submit'])){
                        if(isset($_GET['cars'])){
                            while($row = mysqli_fetch_assoc($result)) {
                                echo $row['first_name']." ".$row['model']." ".$row['brand']." ".$row['brand'];
                            }
                        }
                    }
                    
                ?>
                
               
            </div>

            <div class="cars-form form-controls">
                <label for="date">Select Date</label>
                <select name="date" id="date">
                    <option value="March">March</option>
                    <option value="April">April</option>
                </select><br>
                <input class="btn" type="submit" name="submit1" value="Submit">
            </div>
        </form>
    </div>
</div>

</body>
</html>