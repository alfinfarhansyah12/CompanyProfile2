<?php session_start();

if (!isset($_SESSION['manager_id'])) {
  header("location:../index.php");
  exit();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title>Admin</title>

  <!-- Bootstrap css file -->
  <link rel="stylesheet" href="../../plugins/bootstrap-5.1.3/css/bootstrap.min.css">


  <!--  Iconify SVG framework link -->
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../css/sidebar.css">
  <link rel="stylesheet" href="../css/top_navbar.css">
  <link rel="stylesheet" href="../css/tabbed_box.css">

  <!--google material icon-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">


</head>

<body>

  <?php

  include_once('../../database/koneksi.php');

  if (isset($_POST["submit"])) {

    $nama = trim($_POST['nama']);
    $alamat = trim($_POST['alamat']);
    $tanah = trim($_POST['tanah']);
    $bangunan = trim($_POST['bangunan']);
    $tidur = trim($_POST['tidur']);
    $mandi = trim($_POST['mandi']);
    $mobil = trim($_POST['mobil']);
    $att = trim($_POST['att']);
    $note = trim($_POST['note']);

    if (isset($_FILES['image']['name'])) {
      $filename = $_FILES['image']['name'];

      $location = "../../images/home/" . $filename;

      // if folder doesn't exist -> create one
      if (!file_exists("../../images/home")) {
        mkdir("../../images/home", 0700, true);
      }

      move_uploaded_file($_FILES['image']['tmp_name'], $location);
    }


    $query = "INSERT INTO `data_rumah` (`nama`,`gambar`,`alamat`,`tanah`,`bangunan`,`tidur`,`mandi`,`mobil`,`att`, `note`) VALUES 
	('$nama','$filename','$alamat','$tanah','$bangunan','$tidur','$mandi','$mobil','$att', '$note')";

    mysqli_query($conn, $query);
    header("Refresh: 0;");
  }

  if (isset($_POST["update_info"])) {

    $new_nama = trim($_POST["mn"]);
    $new_alamat = trim($_POST["ma"]);
    $new_tanah = trim($_POST["mt"]);
    $new_bangunan = trim($_POST["mb"]);
    $new_tidur = trim($_POST["mtd"]);
    $new_mandi = trim($_POST["mm"]);
    $new_mobil = trim($_POST["mmb"]);
    $new_att = trim($_POST["mat"]);
    $new_note = trim($_POST["mnote"]);

    $id = $_POST['hidden_id'];

    if ($_FILES['new_image']['size'] > 0) {
      $filename = $_FILES['new_image']['name'];

      $location = "../../images/home/" . $filename;

      move_uploaded_file($_FILES['new_image']['tmp_name'], $location);

      $query = "UPDATE `data_rumah` set gambar='" . $filename . "' WHERE member_id=$id";

      mysqli_query($conn, $query);
    }

    $query = "UPDATE `data_rumah` set nama='" . $new_nama . "', 
							  alamat='" . $new_alamat . "', 
							  tanah='" . $new_tanah . "',
							  bangunan='" . $new_bangunan . "',
							  tidur='" . $new_tidur . "',  
							  mandi='" . $new_mandi . "',
								mobil='" . $new_mobil . "',
								att='" . $new_att . "' ,
								note='" . $new_note . "'
					WHERE member_id=$id";

    if (mysqli_query($conn, $query)) {
      header("Refresh: 0;");
    } else {
      echo mysqli_error($conn);
    }
  }

  ?>
  <div class="wrapper">
    <div class="body-overlay"></div>

    <?php
    // sidebar
    include('../includes/manager_sidebar.php');
    ?>

    <div id="content">

      <?php
      $section = "Data Rumah";

      include('../includes/top_navbar.php');
      ?>

      <div class="main-content">

        <div id="tabbed_box" class="tabbed_box">

          <h4>Data Rumah</h4>
          <hr />

          <div class="tabbed_area">

            <ul class="tabs">
              <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">Lihat Rumah</a></li>
              <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Tambah Data</a></li>
            </ul>

            <!--##################################################################################### 
	View all team members
	##################################################################################### -->

            <div id="content_1" class="content">
              <div class="row ">
                <div class="col-lg-12 col-md-12">
                  <div class="card">

                    <div class="card-content table-responsive">
                      <table class="table table-hover">
                        <thead class="text-primary">
                          <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>Alamat </th>
                            <th>Tanah </th>
                            <th>Bangunan </th>
                            <th>Kmr Tidur </th>
                            <th>Kmr Mandi </th>
                            <th>Mobil </th>
                            <th>Fasillitas </th>
                            <th>Note</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          $result = mysqli_query($conn, "SELECT * FROM data_rumah");
                          while ($row = mysqli_fetch_assoc($result)) { ?>

                          <tr>
                            <td><img src="../../images/home/<?php echo $row['gambar']; ?>" class="square_img"
                                id="image_<?php echo $row['member_id'] ?>" /></td>
                            <td id="nama_<?php echo $row['member_id'] ?>"><?php echo $row['nama']; ?></td>
                            <td id="alamat_<?php echo $row['member_id'] ?>"><?php echo $row['alamat']; ?></td>
                            <td id="tanah_<?php echo $row['member_id'] ?>"><?php echo $row['tanah']; ?>m²</td>
                            <td id="bangunan_<?php echo $row['member_id'] ?>"><?php echo $row['bangunan']; ?>m²</td>
                            <td id="tidur_<?php echo $row['member_id']; ?>"><?php echo $row['tidur']; ?></td>
                            <td id="mandi_<?php echo $row['member_id'] ?>"><?php echo $row['mandi']; ?>
                            <td id="mobil_<?php echo $row['member_id'] ?>"><?php echo $row['mobil']; ?>
                            <td id="att_<?php echo $row['member_id'] ?>"><?php echo $row['att']; ?>
                            <td id="note_<?php echo $row['member_id'] ?>"><?php echo $row['note']; ?>
                            </td>

                            <td>
                              <button class="update_member" id="<?php echo $row['member_id'] ?>">
                                <span class="iconify" data-icon="bx:edit" style="color: green;" data-width="30"
                                  data-height="30"></span>
                              </button>
                            </td>
                            <td>
                              <button class="delete_member" id="<?php echo $row['member_id'] ?>">
                                <span class="iconify" data-icon="fluent:delete-24-filled" style="color: red;"
                                  data-width="30" data-height="30"></span>
                              </button>
                            </td>
                            <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--##################################################################################### 
	Add a new team member
	##################################################################################### -->

            <div id="content_2" class="content">

              <form action="" method="post" enctype="multipart/form-data">
                <table width="220" height="106" border="0">
                  <tr>
                    <td align="center"><input name="image" type="file" style="width:100%" required="required"
                        id="uploadFile" accept=".jpg, .jpeg, .png" /></td>
                  </tr>
                  <tr>
                    <td align="center"><input name="nama" type="text" style="width:100%" placeholder="Nama"
                        required="required" id="add_member_nama" /></td>
                  </tr>
                  <tr>
                    <td align="center"><input name="alamat" type="text" style="width:100%" placeholder="alamat"
                        required="required" id="add_member_alamat" /></td>
                  </tr>
                  <tr>
                    <td align="center"><input name="tanah" type="text" style="width:100%" placeholder="tanah"
                        required="required" id="add_member_tanah" /></td>
                  </tr>
                  <tr>
                    <td align="center"><input name="bangunan" type="text" style="width:100%" placeholder="bangunan"
                        required="required" id="add_member_bangunan" /></td>
                  </tr>
                  <tr>
                    <td align="center"><input name="tidur" type="text" style="width:100%" placeholder="tidur"
                        required="required" id="add_member_tidur" /></td>
                  </tr>
                  <tr>
                    <td align="center"><input name="mandi" type="text" style="width:100%" placeholder="mandi"
                        required="required" id="add_member_mandi" /></td>
                  </tr>
                  <tr>
                    <td align="center"><input name="mobil" type="text" style="width:100%" placeholder="mobil"
                        required="required" id="add_member_mobil" /></td>
                  </tr>
                  <tr>
                    <td align="center"><input name="att" type="text" style="width:100%" placeholder="att"
                        id="add_member_att" /></td>
                  </tr>
                  <tr>
                    <td align="center"><input name="note" type="text" style="width:100%" placeholder="note"
                        id="add_member_note" /></td>
                  </tr>
                  <tr>
                    <td align="right"><input type="submit" value="add" name="submit" class="add_member" /></td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--##################################################################################### 
        when the admin click on edit button
        a popup modal appears -> let the admin update a member's details
    ##################################################################################### -->

  <div id="add_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">

        <!-- modal title -->
        <div class="modal-header">
          <h3 class="modal-title" id="NAME"></h3>
        </div>

        <!--  modal body -->
        <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
          <div class="modal-body">
            <div class="content-wrapper">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <form action="" method="post" enctype="multipart/form-data">
                              <div class="hr-dashed"></div>

                              <input type="hidden" name="hidden_id" id="hidden_id" value="" />

                              <div class="form-group">
                                <img class="image" id="mi" src="" />
                                <label class="col-sm-3 control-label">Click to change photo</label>
                                <div class="col-sm-8">
                                  <input type="file" class="form-control new_image" name="new_image" id="new_image">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label">Nama</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="mn" id="mn" required="required">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label">alamat</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="ma" id="ma" required="required">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label">tanah</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="mt" id="mt" required="required">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label">bangunan</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="mb" id="mb" required="required">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label">tidur</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="mtd" id="mtd" required="required">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label">mandi</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="mm" id="mm" required="required">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label">mobil</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="mmb" id="mmb" required="required">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label">att</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="mat" id="mat" required="required">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label">note</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="mnote" id="mnote" required="required">
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <input class="btn btn-primary" type="submit" name="update_info" id="update_info" value="Update">
              <input class="btn btn-primary" type="submit" name="cancel" id="cancel" value="Cancel">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



  <script src="js/popper.min.js"></script>

  <!-- bootstrap js file-->
  <script src="../../plugins/bootstrap-5.1.3/js/bootstrap.min.js"></script>

  <!-- jquery js file  -->
  <script src="../../plugins/jquery-3.6.0/jquery.min.js"></script>

  <!-- sweetalert2 js file -->
  <script src="../../plugins/sweetalert2/sweetalert2.js"></script>

  <script src="../js/script.js" type="text/javascript"></script>
  <script src="../js/update_delete.js" type="text/javascript"></script>


</body>

</html>