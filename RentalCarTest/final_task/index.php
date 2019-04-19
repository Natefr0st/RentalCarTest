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

//QUERIES

$sql = "SELECT `first_name`, `brand`, `model`, `hire_date` FROM `rentals` JOIN customers ON rentals.customer_id = customers.id_customer JOIN vehicles ON rentals.vehicle_id = vehicles.id_vehicle
";
$result = mysqli_query($conn, $sql);

$sql1 = "SELECT `brand`, `model`, `colour`, `engine_power`, `hire_date`, `return_date` FROM `vehicles` JOIN `rentals` ON `vehicles`.`id_vehicle`=`rentals`.`id_rental`";
$result1 = mysqli_query($conn, $sql1);


$sql2 = "SELECT `model` FROM `vehicles`";
$result2 = mysqli_query($conn, $sql2);

// END QUERIES
function getData(){
    if(isset($_GET['submit']) && isset($_GET['models'])){
        if(isset($_GET['cars'])){
            print_r($_GET['cars']);
            echo "<br>";
            print_r($_GET['models']);
        }
    }
}
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
                    getData();
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