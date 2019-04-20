<?php

//Get data with a function
function getVehicle(){
    if(isset($_GET['submit'])){
        if(isset($_GET['cars']) && isset($_GET['models'])){
            print_r($_GET['cars']);
            echo "<br>";
            print_r($_GET['models']);
        }
    }
}


//QUERY FUNCTIONS
function getQuery(){
    $sql = "SELECT `first_name`, `brand`, `model`, `hire_date` FROM `rentals` JOIN customers ON rentals.customer_id = customers.id_customer JOIN vehicles ON rentals.vehicle_id = vehicles.id_vehicle
";
    return $sql;
}


function getQuery1(){
    $sql1 = "SELECT `brand`, `model`, `colour`, `engine_power`, `hire_date`, `return_date` FROM `vehicles` JOIN `rentals` ON `vehicles`.`id_vehicle`=`rentals`.`id_rental`";
    return $sql1;
}


function getQuery2(){
    $sql2 = "SELECT `model` FROM `vehicles`";
    return $sql2;
}

function getQuery3(){
    $sql3 = "SELECT `brand` FROM `vehicles`";
    return $sql3;
}
?>