$(document).ready(function () {
  var customer_first_name,
    customer_last_name,
    email_address,
    mobile_number,
    customer_note,
    service_type;

  $("#place_order").click(function () {
    var result = validate_form();

    // if all info are valid then we place the order
    if (result == true) {
      // send data to PHP server script (Place_Order.php) using Ajax request.
      $.ajax({
        url: "./requests/Place_Order.php",
        method: "POST",
        data: {
          customer_first_name: customer_first_name,
          customer_last_name: customer_last_name,
          email_address: email_address,
          mobile_number: mobile_number,
          customer_note: customer_note,
          service_type: service_type, // Tambahkan jenis layanan yang dipilih
          action: "place_order",
        },
        success: function () {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "You're order has been received!",
            showConfirmButton: false,
            timer: 2000,
          });

          window.location = "index.php";
        },
      });
    }
  });

  function validate_form() {
    var valid = true;

    customer_first_name = $("#customer_first_name").val();
    customer_last_name = $("#customer_last_name").val();
    email_address = $("#email_address").val();
    mobile_number = $("#mobile_number").val();
    customer_note = $("#customer_note").val();
    service_type = $("input[name='service_type']:checked").val(); // Ambil nilai radio button yang dipilih

    var email_expression =
      /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i;

    // Validasi Nama Depan
    if (customer_first_name === "") {
      $("#customer_first_name").addClass("require");
      $("#error_customer_first_name").text("Insert a valid First Name");
      valid = false;
    } else {
      $("#customer_first_name").removeClass("require");
      $("#error_customer_first_name").text("");
    }

    // Validasi Nama Belakang
    if (customer_last_name === "") {
      $("#customer_last_name").addClass("require");
      $("#error_customer_last_name").text("Insert a valid Last Name");
      valid = false;
    } else {
      $("#customer_last_name").removeClass("require");
      $("#error_customer_last_name").text("");
    }

    // Validasi Email
    if (!email_expression.test(email_address)) {
      $("#email_address").addClass("require");
      $("#error_email_address").text("Invalid Email Address");
      valid = false;
    } else {
      $("#email_address").removeClass("require");
      $("#error_email_address").text("");
    }

    // Validasi Nomor Telepon
    if (mobile_number === "") {
      $("#mobile_number").addClass("require");
      $("#error_mobile_number").text("Enter Mobile Number");
      valid = false;
    } else {
      $("#mobile_number").removeClass("require");
      $("#error_mobile_number").text("");
    }

    // Validasi Note
    if (customer_note === "") {
      $("#customer_note").removeClass("require");
      $("#error_customer_note").text("");
    }

    // Validasi Checkbox Persetujuan
    if (!$("#agree_checkbox").is(":checked")) {
      $("#error_agree_checkbox").text(
        "Please agree on our terms and conditions"
      );
      valid = false;
    } else {
      $("#error_agree_checkbox").text("");
    }

    return valid;
  }
});
