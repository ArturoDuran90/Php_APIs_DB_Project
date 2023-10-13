<?php
include "dbConnector.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST["id"];
    $year = $_POST['vehicleYear'];
    $make = $_POST['vehicleMake'];
    $model = $_POST['vehicleModel'];
    $trim = $_POST['vehicleTrim'];
    $msrp = $_POST['vehicleMSRP'];

    // Create the vehicle record in the database
    $dbConn = ConmnGet();
    if (Update($dbConn, $id, $year, $make, $model, $trim, $msrp)) {
        // Vehicle created successfully, you can redirect to a success page or display a success message.
        header("Location: ../Front_End/index.php");
        exit();
    } else {
        // Handle the case where vehicle creation fails.
        echo "<h1>Failed to update vehicle. Please try again.</h1>";
    }
}
?>
