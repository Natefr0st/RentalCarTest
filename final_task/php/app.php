<?php

// $cars = $_GET['cars'];
// echo "<br>","<br>";
// while($row = mysqli_fetch_assoc($result)) {
//     echo $row["first_name"]. " " . $row["brand"] . " " . $row["model"]. " " . $row["hire_date"];
//     echo "<br>";
// }

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

<?php 
// echo "<br>","<br>";

// while($row = mysqli_fetch_assoc($result1)) {
//     echo $row["brand"]. " " . $row["model"] . " " . $row["colour"]. " " . $row["engine_power"]. " ". $row["hire_date"]. " " . $row["return_date"];
//     echo "<br>";
// }

?>



<?php
// SANDBOX

if(isset($_GET['submit'])){
    if(isset($_GET['cars'])){
        echo $result;
    }
}
    
?>