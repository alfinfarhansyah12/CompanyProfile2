<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="img/android-icon-48x48.png" type="image/x-icon" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Icon css link -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/stroke-icon/style.css" rel="stylesheet">
  <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Rev slider css -->
  <link href="vendors/revolution/css/settings.css" rel="stylesheet">
  <link href="vendors/revolution/css/layers.css" rel="stylesheet">
  <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
  <link href="vendors/animate-css/animate.css" rel="stylesheet">

  <!-- Extra plugin css -->
  <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
  <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
  <link href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
  <link href="vendors/lightbox/simpleLightbox.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/checkout.css">

</head>

<body>

  <?php
  include "side_icon.php";
  ?>
  <!--================Header Area =================-->
  <?php
  include "header.php";
  ?>
  <!--================Header Area =================-->
  <!--================Banner Area =================-->
  <section class="banner_area">
    <div class="container">
      <div class="banner_inner_content">
        <h3>Kontak Kami</h3>
        <ul>
          <li class="active"><a href="index-2.php">Home</a></li>
          <li><a href="contact-us-2.php">Kontak Kami</a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--================End Banner Area =================-->

  <!--================Get Contact Area =================-->
  <section class="get_contact_area">
    <div class="container">
      <div class="row get_contact_inner">
        <div class="col-md-6">
          <div class="left_ex_title">
            <h2>get in <span>touch</span></h2>
          </div>
          <form class="contact_us_form row m0" action="#" method="post" id="contactForm" enctype="multipart/form-data">
            <!--<form action="" class="form-validation" autocomplete="off" method="post" id="contactForm" enctype="multipart/form-data"> -->
            <div id="check1"></div>
            <div class="form-group col-md-12">
              <label><b>First Name <span class="text-danger">*</span></b></label>
              <input type="text" name="customer_first_name" id="customer_first_name" class="form-control" value="" />
              <span id="error_customer_first_name" class="text-danger"></span>
            </div>
            <div class="form-group col-md-12">
              <label><b>Email Address <span class="text-danger">*</span></b></label>
              <input type="text" name="email_address" id="email_address" class="form-control" value="" />
              <span id="error_email_address" class="text-danger"></span>
            </div>
            <div class="form-group col-md-12">
              <label><b>Mobile Number <span class="text-danger">*</span></b></label>
              <div class="input-group">
                <span class="input-group-text">+62</span>
                <input type="number" name="mobile_number" id="mobile_number" class="form-control" />
              </div>
              <span id="error_mobile_number" class="text-danger"></span>
            </div>
            <div class="form-group col-md-12">
              <label><b>Note</span> (Opsional)</b></label>
              <textarea name="customer_note" id="customer_note" class="form-control"></textarea>
              <!-- <span id="error_customer_note" class="text-danger"></span> -->
            </div>
            <!-- Pengaduan dan Laporan -->
            <div class="form-group">
              <label><b>Jenis Layanan <span class="text-danger">*</span></b></label>
              <div class="form-check">
                <input type="radio" name="service_type" id="service_complaint" value="Complaint"
                  class="form-check-input" />
                <label class="form-check-label" for="service_complaint">Complaint</label>
              </div>
              <div class="form-check">
                <input type="radio" name="service_type" id="service_pengaduan" value="Pengaduan"
                  class="form-check-input" />
                <label class="form-check-label" for="service_pengaduan">Pengaduan</label>
              </div>
              <span id="error_service_type" class="text-danger"></span>
            </div>

            <hr style="margin-top:1.5em;" />
            <div class="form-group">
              <input type="checkbox" name="agree_checkbox" id="agree_checkbox">
              <label><b>I have read and agree to the website terms and conditions *</b></label>
              <br>
              <span id="error_agree_checkbox" class="text-danger"></span>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="right_contact_info">
            <div class="contact_info_title">
              <h3>Contact info</h3>
              <p>Have any Queries? Let us know. We will clear it for you at the best.</p>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6176864598497!2d107.01206247355373!3d-6.181895660569424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698964e8543e6b%3A0x54fc3b3451bf0e3d!2sJl.%20Marrakash%20Square%2C%20Bahagia%2C%20Kec.%20Babelan%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017610!5e0!3m2!1sid!2sid!4v1733077514170!5m2!1sid!2sid"
                width="80%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="checkout">
          <div class="place_order">
            <button type="submit" value="submit" id="place_order" class="btn-success">submit
              now</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>

    <!-- <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59989.37333541464!2d73.71511973052043!3d19.994414961210335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb3c54a61cd9%3A0x43af333d801b5183!2sNP%20IT%20Solutions!5e0!3m2!1sen!2sin!4v1677499297675!5m2!1sen!2sin"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe> -->

  </section>
  <!--================End Map Area =================-->

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

  <!--================Footer Area =================-->
  <?php
  include "footer.php";
  ?>
  <!--================End Footer Area =================-->

  <!--================Search Box Area =================-->
  <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
      <h3>Search</h3>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
        </span>
      </div>
    </div>
  </div>
  <!--================End Search Box Area =================-->
  <section class="android-call-button hidden-md hidden-lg visible-xs visible-sm   ">
    <div class="row">
      <div class="col-xs-4 "><a href="tel:9325756647" class=""><i class="fa fa-phone" aria-hidden="true"></i><strong>
            Call Now</strong></a></div>
      <div class="col-xs-4 "><a href="https://api.whatsapp.com/send?phone=919325756647" class=""><i
            class="fa fa-whatsapp" aria-hidden="true"></i><strong>
            Whatsapp</strong></a></div>
      <div class="col-xs-4 "><a href="mailto:info@shivnerifortvalley.com" class=""><i class="fa fa-envelope"
            aria-hidden="true"></i>
          <strong>Enquiry</strong></a></div>
    </div>
  </section>

  <!--================End Footer Area =================-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.2.4.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Rev slider js -->
  <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

  <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope.pkgd.min.js"></script>
  <script src="vendors/counterup/waypoints.min.js"></script>
  <script src="vendors/counterup/jquery.counterup.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
  <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
  <!--        <script src="vendors/lightbox/js/lightbox.min.js"></script>-->
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>

  <!-- instafeed-->
  <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
  <script type="text/javascript" src="vendors/instafeed/script.js"></script>

  <script src="js/theme.js"></script>

</body>

<div class="container book-now">


  <!-- Modal -->
  <div class="modal " id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" data-toggle="modal" data-target="#myModal">Enquire Now</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Name">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Phone Number">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="exampleInputPassword1">Message</label>
                <textarea class="form-control" rows="4" placeholder="Message"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <div class="col-md-7">
                  <button type="submit" class="btn">Send</button>
                </div>
                <div class="col-md-5">
                  <ul style="text-align:right">
                    <li style="display:inline;padding:10px"><a
                        href="https://api.whatsapp.com/send?phone=919325756647"><i class="fa fa-whatsapp"
                          style="font-size:30px;color:#4d1b00;margin-left:5px"></i></a></li>
                    <li style="display:inline"><a href="tel:9325756647" class=""><i class="fa fa-phone"
                          style="font-size:30px;color:#4d1b00"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(function() {
    $('.datetimepicker').datetimepicker();
  });
  </script>

</html>