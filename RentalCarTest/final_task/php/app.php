<!-- TEST FILE -->



<?php
// SANDBOX

if(isset($_GET['submit'])){
    if(isset($_GET['cars'])){
        $names = mysqli_fetch_all($result, MYSQLI_ASSOC);
        print_r($names);
    }
}


$getName = "SELECT first_name FROM customers";
$result3 = mysqli_query($conn, $getName);
$names = mysqli_fetch_all($result3, MYSQLI_ASSOC);
print_r($names);



//write query
$result = mysqli_query($conn, $sql);
//fetch the resulting rows as an array
$models = mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($models);
// free result from memory
mysqli_free_result($result);


//Construct query with a function
function getQuery(){
    $sql = "SELECT `first_name`, `brand`, `model`, `hire_date` FROM `rentals` JOIN customers ON rentals.customer_id = customers.id_customer JOIN vehicles ON rentals.vehicle_id = vehicles.id_vehicle
";
    return $sql;
}

$formatted = getQuery();
echo $formatted;


//Get data with a function
function getData(){
    if(isset($_GET['submit'])){
        if(isset($_GET['cars']) && isset($_GET['models'])){
            print_r($_GET['cars']);
            echo "<br>";
            print_r($_GET['cars']);
        }
    }
}
?>
