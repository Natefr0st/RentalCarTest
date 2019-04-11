<?php

$sql = "SELECT `first_name`, `brand`, `model`, `hire_date` FROM `rentals` JOIN customers ON rentals.customer_id = customers.id_customer JOIN vehicles ON rentals.vehicle_id = vehicles.id_vehicle
";

$result = mysqli_query($conn, $sql);

$sql1 = "SELECT `brand`, `model`, `colour`, `engine_power`, `hire_date`, `return_date` FROM `vehicles` JOIN `rentals` ON `vehicles`.`id_vehicle`=`rentals`.`id_rental`";

$result1 = mysqli_query($conn, $sql1);
?>