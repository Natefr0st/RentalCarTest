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

$result = mysqli_query($conn, getQuery()) or die('Error: Query error');
$result1 = mysqli_query($conn, getQuery1()) or die('Error: Query error');
$result2 = mysqli_query($conn, getQuery2()) or die('Error: Query error');
$result3 = mysqli_query($conn, getQuery3()) or die('Error: Query error');

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
                        $brands = mysqli_fetch_all($result3, MYSQLI_ASSOC);
                        foreach($brands as $brand){
                            echo "<option value='".$brand['brand']."'>".$brand['brand']."</option>";
                        }
                        //Free result from memory
                        mysqli_free_result($result3);
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
                <label for="date">Select Date</label><br>
                <input checked type="radio" name="date" id="date">March
                <input type="radio" name="date" id="date">April
                <br>
                <input class="btn" type="submit" name="submit" value="Submit"><br>
                <?php
                //Render results to browser
                    if(isset($_GET['submit'])){
                        $result = mysqli_query($conn, getQuery()) or die('error');
                    
                        echo "<table border='1' style='margin: 0 auto; margin-top: 15px'>";
                        echo "<tr> <th>First Name</th><th>Brand</th><th>Model</th><th>Hire Date</th> </tr>";
                    
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    
                            echo "<tr><td>";
                            echo $row['first_name'];
                            echo "</td><td>";
                            echo $row['brand'];
                            echo "</td><td>";
                            echo $row['model'];
                            echo "</td><td>";
                            echo $row['hire_date'];
                            echo "</td></tr>";
                    
                        }
                    
                        echo "</table>";
                    }
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