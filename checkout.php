<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1, maximum-scale=1">
    <title>Checkout</title>

    <!-- bootstrap css file -->
    <link rel="stylesheet" href="./plugins/bootstrap-5.1.3/css/bootstrap.min.css">

    <!-- font awesome css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- midtrans -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-7MSMnJqEZPTxvX-y"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/checkout.css">
</head>

<body>
    <div class="checkout">
        <div class="container1">

            <!-- BILLING DETAILS -->
            <div class="billing_details">
                <h1 align="center">Customer Details</h1>

                <!-- customer name -->
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label><b>First Name <span class="text-danger">*</span></b></label>
                            <input type="text" name="customer_first_name" id="customer_first_name" class="form-control" value="" />
                            <span id="error_customer_first_name" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label><b>Last Name <span class="text-danger">*</span></b></label>
                            <input type="text" name="customer_last_name" id="customer_last_name" class="form-control" value="" />
                            <span id="error_customer_last_name" class="text-danger"></span>
                        </div>
                    </div>
                </div>

                <!-- customer email and phone number -->
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label><b>Email Address <span class="text-danger">*</span></b></label>
                            <input type="text" name="email_address" id="email_address" class="form-control" value="" />
                            <span id="error_email_address" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label><b>Mobile Number <span class="text-danger">*</span></b></label>
                            <div class="input-group">
                                <span class="input-group-text">+62</span>
                                <input type="number" name="mobile_number" id="mobile_number" class="form-control" />
                            </div>
                            <span id="error_mobile_number" class="text-danger"></span>
                        </div>
                    </div>
                </div>

                <!-- customer address -->
                <div class="form-group">
                    <label><b>Note</span> (Opsional)</b></label>
                    <textarea name="customer_note" id="customer_note" class="form-control"></textarea>
                    <!-- <span id="error_customer_note" class="text-danger"></span> -->
                </div>

                <!-- Pengaduan dan Laporan -->
                <div class="form-group">
                    <label><b>Jenis Layanan <span class="text-danger">*</span></b></label>
                    <div class="form-check">
                        <input type="radio" name="service_type" id="service_complaint" value="Complaint" class="form-check-input" />
                        <label class="form-check-label" for="service_complaint">Complaint</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="service_type" id="service_pengaduan" value="Pengaduan" class="form-check-input" />
                        <label class="form-check-label" for="service_pengaduan">Pengaduan</label>
                    </div>
                    <span id="error_service_type" class="text-danger"></span>
                </div>

                <hr style="margin-top:1.5em;" />
            </div>
            <!-- ORDER DETAILS -->
            <div class="order_details">
                <h1 align="center">Contact Info</h1>
                <div class="table-responsive" id="order_table">
                </div>
            </div>
        </div>
        <div class="container2">

            <!-- PAYMENT DETAILS -->
            <div class="payment_details">
                <h1 align="center">Details</h1>
                <!-- <div class="form-group">
                    <input type="checkbox" checked disabled>
                    <label><b>Cash on Delivery </b></label>
                </div>

                <h4>Your personal data will be used to process your order and support your experience throughout this website.
                </h4> -->

                <div class="form-group">
                    <input type="checkbox" name="agree_checkbox" id="agree_checkbox">
                    <label><b>I have read and agree to the website terms and conditions *</b></label>
                    <br>
                    <span id="error_agree_checkbox" class="text-danger"></span>
                </div>
            </div>
        </div>

        <div class="place_order">
            <input type="button" id="place_order" class="btn-success" value="Submit" />
        </div>
    </div>

    <!-- jquery js file  -->
    <script src="./plugins/jquery-3.6.0/jquery.min.js"></script>

    <!-- bootstrap js file-->
    <script src="./plugins/bootstrap-5.1.3/js/bootstrap.min.js"></script>

    <!-- sweetalert2 js file -->
    <script src="./plugins/sweetalert2/sweetalert2.js"></script>

    <script src=" ./js/form_validation.js"></script>

    <script src="js/backButton.js"></script>

    <script>
        document.getElementById('mobile_number').addEventListener('input', function(e) {
            const input = e.target;
            let value = input.value;
            // Remove leading zero(s) if present
            if (value.startsWith('0')) {
                value = value.substring(1);
            }
            // Update the input value
            input.value = value;
        });
    </script>
</body>

</html>