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
include 'php/functions.php';

//QUERIES

$result = mysqli_query($conn, getQuery());
$result1 = mysqli_query($conn, getQuery1());
$result2 = mysqli_query($conn, getQuery2());

// END QUERIES

?>

<div class="container">
    <div class="form-group">
        <h1>Advance Academy Rental Car</h1>
        <form method="GET">
            <div class="customers-form form-controls">
                <label for="cars">Select Vehicle</label><br>
                <select name="cars" id="cars">
                    <?php 
                    //Populate dropdown menu from DB
                        $brands = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        foreach($brands as $brand){
                            echo "<option value='".$brand['brand']."'>".$brand['brand']."</option>";
                        }
                        //Free result from memory
                        mysqli_free_result($result);
                    ?>
                </select>
                <select name="models" id="models">
                    <?php 
                    //Populate dropdown menu from DB
                        $models = mysqli_fetch_all($result2, MYSQLI_ASSOC);
                        foreach($models as $model){
                            echo "<option value='".$model['model']."'>".$model['model']."</option>";
                        }
                        //Free result from memory
                        mysqli_free_result($result2);
                    ?>
                </select>
                <br>
                <input class="btn" type="submit" name="submit" value="Submit"><br>
                <?php
                    getVehicle();
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


<?php
//Close DB
mysqli_close($conn);

?>
</body>
</html>