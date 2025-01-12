<?php
session_start();
include('../database/koneksi.php');

// Mengatur zona waktu ke WIB (Waktu Indonesia Barat)
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST["action"])) {
    if ($_POST["action"] == "place_order") {
        $customer_first_name = trim($_POST['customer_first_name']);
        $customer_last_name = trim($_POST['customer_last_name']);
        $customer_name = $customer_first_name . " " . $customer_last_name;
        $customer_email = trim($_POST['email_address']);
        $customer_number = trim($_POST['mobile_number']);
        $customer_note = trim($_POST['customer_note']);
        $order_datetime = date('Y-m-d H:i:s'); // Format DATETIME: 'YYYY-MM-DD HH:MM:SS'
        $order_lasttime = date('Y-m-d H:i:s'); // Format DATETIME: 'YYYY-MM-DD HH:MM:SS'

        $service_type = trim($_POST['service_type']); // Menambahkan jenis layanan

        $customer_status = "Ordering";

        $query = "INSERT INTO orderinfo(`customer_name`, `customer_email`,`customer_phone`, `customer_note`, `order_datetime`, `order_lasttime`, `customer_status`,`service_type`) 
                  VALUES ('$customer_name','$customer_email','$customer_number','$customer_note','$order_datetime', '$order_lasttime', '$customer_status', '$service_type')";

        if (mysqli_query($conn, $query)) {
            $order_id = mysqli_insert_id($conn);
        } else {
            echo json_encode(['error' => 'Failed to place order']);
        }
    }
}
