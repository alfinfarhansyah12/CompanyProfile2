<?php session_start();

include('../database/koneksi.php');

if (isset($_POST["action"])) {
    if ($_POST["action"] == "checkout") {

        // get shipping price from database -> shipping cost initially in ($)
        $query = "SELECT delivery_cost FROM Delivery";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
    }
}
