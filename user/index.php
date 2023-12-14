<?php 
include("session.php");
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php include("header.php"); ?>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("navbar.php"); ?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Welcome back!</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <?php
                  $query_profilePict = "SELECT * FROM uploaded_file WHERE username = '$username' AND file_type = '1'";
                  $result_profilePict = mysqli_query($conn, $query_profilePict);
                  $row_profilePict = mysqli_fetch_assoc($result_profilePict);
                  $profile = $row_profilePict['file_directory'];
                ?>
                  
                  <a data-toggle="modal" class="btn btn-sm btn-a edit" title="View Profile" href="#user_view_profile<?php echo $username; ?>" href="#user_view_profile"><img class="profile-user-img img-fluid img-circle"
                    src="<?php echo $profile ?>"
                    alt="User profile picture">
                  </a>
                </div>
                <?php include("modals/user_view_profile.php"); ?>
                <?php

                  $session_id=$_SESSION['id'];
                  $access_Type = $_SESSION['access_type'];

                  if($access_Type == 'PWD'){
                    $query = "SELECT * FROM pwd_db WHERE pwd_id = '$session_id'";
                    $result = mysqli_query($conn, $query);
                    $row_info = mysqli_fetch_assoc($result);
                    $name = $row_info['first_name'].' '.$row_info['middle_name'].' '.$row_info['last_name'];
                    $first_name = $row_info['first_name'];
                    $middle_name = $row_info['middle_name'];
                    $last_name = $row_info['last_name'];
                    $dob = $row_info['dob'];
                    $age = $row_info['age'];
                    $gender = $row_info['gender'];
                    $birth_place = $row_info['birth_place'];
                    $civil_status = $row_info['civil_status'];
                    $blood_type = $row_info['blood_type'];
                    $ph_id = $row_info['ph_id'];
                    $tin_id = $row_info['tin_id'];
                    $religion = $row_info['religion'];
                    $contact_number = $row_info['contact_number'];
                    $email_address = $row_info['email_address'];
                    $province = $row_info['province'];
                    $city_town = $row_info['city_town'];
                    $address = $row_info['address'];
                    $educational_attainment = $row_info['educational_attainment'];
                    $employment_status = $row_info['employment_status'];
                    $contact_person = $row_info['contact_person'];
                    $contact_person_no = $row_info['contact_person_no'];
                    $valid_id = $row_info['valid_id'];
                    $id_number = $row_info['id_number'];
                    $disability = $row_info['disability'];
                    $username = $row_info['username'];
                    $status = $row_info['status'];
                    $idNumber = "PWD-0000000-$session_id";
                  }else{
                    $query = "SELECT * FROM sc_db WHERE sc_id = '$session_id'";
                    $result = mysqli_query($conn, $query);
                    $row_info = mysqli_fetch_assoc($result);
                    $name = $row_info['first_name'].' '.$row_info['middle_name'].' '.$row_info['last_name'];
                    $first_name = $row_info['first_name'];
                    $middle_name = $row_info['middle_name'];
                    $last_name = $row_info['last_name'];
                    $dob = $row_info['dob'];
                    $age = $row_info['age'];
                    $gender = $row_info['gender'];
                    $birth_place = $row_info['birth_place'];
                    $civil_status = $row_info['civil_status'];
                    $blood_type = $row_info['blood_type'];
                    $ph_id = $row_info['ph_id'];
                    $tin_id = $row_info['tin_id'];
                    $religion = $row_info['religion'];
                    $contact_number = $row_info['contact_number'];
                    $email_address = $row_info['email_address'];
                    $province = $row_info['province'];
                    $city_town = $row_info['city_town'];
                    $address = $row_info['address'];
                    $educational_attainment = $row_info['educational_attainment'];
                    $employment_status = $row_info['employment_status'];
                    $contact_person = $row_info['contact_person'];
                    $contact_person_no = $row_info['contact_person_no'];
                    $valid_id = $row_info['valid_id'];
                    $id_number = $row_info['id_number'];
                    $username = $row_info['username'];
                    $status = $row_info['status'];
                    $idNumber = "SC-0000000-$session_id";
                  }
                ?>
                <br/>
                  <h3 class="profile-username text-center"><?php echo $name; ?></h3>
                  <p class="text-center"><?php echo $idNumber; ?></p><br/>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Username</b> <p class="float-right"><?php echo $username;?></p>
                    </li>
                    <li class="list-group-item">
                      <b>Access Type</b> <p class="float-right"><?php
                      if($access_Type == "PWD"){
                        echo "PWD";
                      }else{
                        echo "Senior Citizens";
                      }
                      ?></p>
                    </li>
                    <li class="list-group-item">
                      
                      <?php 
                          if($status == "Pending"){
                            ?>
                            <b>Status</b> <a class="float-right"><span class="badge badge-warning">Pending</span></a>
                            <?php
                          }elseif($status == "Approved"){
                          ?>
                            <b>Status</b> <a class="float-right"><span class="badge badge-success">Approved</span></a>
                            <?php
                          }elseif($status == "Declined"){
                          ?>
                            <b>Status</b> <a class="float-right"><span class="badge badge-danger">Declined</span></a>
                            <?php
                          }
                        ?>
                    </li>
                    <li class="list-group-item">
                      <b>Medical Records</b> <a data-toggle="modal" class="btn btn-a edit float-right" title="View Documents" href="#user_view_document<?php echo $username; ?>" href="#user_view_document"><i class="fa fa-file-pdf"></i></a>
                    </li>
                  </ul>
                  <?php include("modals/user_view_file.php"); ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-lg-8">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Profile Information</h3>
                <i class="fa fa-edit text-lightblue" style="float: right;"></i>
              </div>
              <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="phpaction/update_profile.php">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label class="control-label">First Name<span class="text-danger">*</span></label>
                        <input name="fname" type="text" class="form-control" value="<?php echo $first_name; ?>" required>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label class="text-black" >Middle Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" name="mname" value="<?php echo $middle_name; ?>" required>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label class="text-black" >Last Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $last_name; ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row form-group">

                    <div class="col-md-3">
                      <label class="text-black" >Date of Birth<span class="text-danger"> *</span></label>
                      <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>" required>
                    </div>

                    <div class="col-md-3">
                      <label class="text-black" >Birth Place<span class="text-danger"> *</span></label>
                      <input type="text" class="form-control" name="b_place" value="<?php echo $birth_place; ?>" required>
                    </div>

                    <div class="col-md-3">
                      <label class="text-black" >Age<span class="text-danger"> *</span></label>
                      <input name="age" type="number" class="form-control" value="<?php echo $age; ?>" required>
                    </div>

                    <div class="col-md-3 mb-3 mb-md-0">
                      <label class="text-black" >Sex<span class="text-danger"> *</span></label>
                      <select class="form-control" name="sex" required>
                        <option value="<?php echo $gender; ?>" selected> <?php echo $gender; ?> </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Female">Other</option>
                      </select>
                    </div>
                  </div>


                  <div class="row form-group">
                    <div class="col-md-4">
                      <label class="text-black" >Contact Number<span class="text-danger"> *</span></label>
                      <input name="contact_no" type="number" class="form-control" value="<?php echo $contact_number; ?>" required>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                      <label class="text-black" for="fname">Blk/Lot/Ph/Street/Barangay<span class="text-danger"> *</span></label>
                      <input name="address_blk" type="text" class="form-control" value="<?php echo $address; ?>" required>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                      <label class="text-black" >Municipality / City<span class="text-danger"> *</span></label>
                      <select class="form-control" name="address_municipality" >
                        <option value="<?php echo $city_town; ?>" selected> <?php echo $city_town; ?> </option>
                        <option value="Quezon City">Quezon City</option>
                        <option value="Manila">Manila</option>
                        <option value="Davao City">Davao City</option>               
                        <option value="Caloocan">Caloocan</option>
                        <option value="Zamboanga City">Zamboanga City</option>
                        <option value="Cebu City">Cebu City</option>
                        <option value="Antipolo">Antipolo</option>                      
                        <option value="Taguig">Taguig</option>
                        <option value="Pasig">Pasig</option>
                        <option value="Cagayan de Oro">Cagayan de Oro</option>                      
                        <option value="others">others</option>
                      </select>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                      <label class="text-black" >Province<span class="text-danger"> *</span></label>
                      <select class="form-control" name="address_province" required>
                        <option value="<?php echo $province; ?>" selected> <?php echo $province; ?> </option>
                        <option value="Abra">Abra</option>
                        <option value="Agusan del Norte">Agusan del Norte</option>
                        <option value="Agusan del Sur">Agusan del Sur</option>
                        <option value="Aklan">Aklan</option>
                        <option value="Albay">Albay</option>
                        <option value="Antique">Antique</option>
                        <option value="Apayao">Apayao</option>
                        <option value="Aurora">Aurora</option>
                        <option value="Basilan">Basilan</option>
                        <option value="Bataan">Bataan</option>
                        <option value="Batanes">Batanes</option>
                        <option value="Batangas">Batangas</option>
                        <option value="Benguet">Benguet</option>
                        <option value="Biliran">Biliran</option>
                        <option value="Bohol">Bohol</option>
                        <option value="Bukidnon">Bukidnon</option>
                        <option value="Bulacan">Bulacan</option>
                        <option value="Cagayan">Cagayan</option>
                        <option value="Camarines Norte">Camarines Norte</option>
                        <option value="Camarines Sur">Camarines Sur</option>
                        <option value="Camiguin">Camiguin</option>
                        <option value="Capiz">Capiz</option>
                        <option value="Catanduanes">Catanduanes</option>
                        <option value="Cavite">Cavite</option>
                        <option value="Cebu">Cebu</option>
                        <option value="Cotabato">Cotabato</option>
                        <option value="Davao de Oro">Davao de Oro</option>
                        <option value="Davao del Norte">Davao del Norte</option>
                        <option value="Davao del Sur">Davao del Sur</option>
                        <option value="Davao Occidental">Davao Occidental</option>
                        <option value="Davao Oriental">Davao Oriental</option>
                        <option value="Dinagat Islands">Dinagat Islands</option>
                        <option value="Eastern Samar">Eastern Samar</option>
                        <option value="Guimaras">Guimaras</option>
                        <option value="Ifugao">Ifugao</option>
                        <option value="Ilocos Norte">Ilocos Norte</option>
                        <option value="Ilocos Sur">Ilocos Sur</option>
                        <option value="Iloilo">Iloilo[</option>
                        <option value="Isabela">Isabela</option>
                        <option value="Kalinga">Kalinga</option>
                        <option value="La Union">La Union</option>
                        <option value="La Union">La Union</option>
                        <option value="Lanao del Norte">Lanao del Norte</option>
                        <option value="Lanao del Sur">Lanao del Sur</option>
                        <option value="Leyte">Leyte[</option>
                        <option value="Maguindanao del Norte">Maguindanao del Norte</option>
                        <option value="Maguindanao del Sur">Maguindanao del Sur</option>
                        <option value="Marinduque">Marinduque</option>
                        <option value="Masbate">Masbate</option>
                        <option value="Metro Manila">Metro Manila</option>
                        <option value="Misamis Occidental">Misamis Occidental</option>
                        <option value="Misamis Oriental">Misamis Oriental</option>
                        <option value="Mountain Province">Mountain Province</option>
                        <option value="Negros Occidental">Negros Occidental</option>
                        <option value="Negros Oriental">Negros Oriental</option>
                        <option value="Northern Samar">Northern Samar</option>
                        <option value="Nueva Ecija">Nueva Ecija</option>
                        <option value="Nueva Vizcaya">Nueva Vizcaya</option>
                        <option value="Occidental Mindoro">Occidental Mindoro</option>
                        <option value="Oriental Mindoro">Oriental Mindoro</option>
                        <option value="Palawan">Palawan</option>
                        <option value="Pampanga">Pampanga[</option>
                        <option value="Pangasinan">Pangasinan[</option>
                        <option value="Quezon">Quezon</option>
                        <option value="Quirino">Quirino</option>
                        <option value="Rizal">Rizal</option>
                        <option value="Romblon">Romblon</option>
                        <option value="Samar">Samar</option>
                        <option value="Sarangani">Sarangani</option>
                        <option value="Siquijor">Siquijor</option>
                        <option value="Sorsogon">Sorsogon</option>
                        <option value="South Cotabato">South Cotabato</option>
                        <option value="Southern Leyte">Southern Leyte</option>
                        <option value="Sultan Kudarat">Sultan Kudarat</option>
                        <option value="Sulu">Sulu</option>
                        <option value="Surigao del Norte">Surigao del Norte</option>
                        <option value="Surigao del Sur">Surigao del Sur</option>
                        <option value="Tarlac">Tarlac</option>
                        <option value="Tawi-Tawi">Tawi-Tawi</option>
                        <option value="Zambales">Zambales</option>
                        <option value="Zamboanga del Norte">Zamboanga del Norte</option>
                        <option value="Zamboanga del Sur">Zamboanga del Sur</option>
                        <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>

                    <div class="col-md-3">
                      <label class="text-black" >Civil Status<span class="text-danger"> *</span></label>
                      <select class="form-control" name="civil_stats" required>
                        <option value="<?php echo $civil_status; ?>" selected> <?php echo $civil_status; ?> </option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow">Widow</option>
                        <option value="Seperated">Seperated</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label class="text-black" >Religion</label>
                      <input name="religion" type="text" value="<?php echo $religion; ?>" class="form-control" >
                    </div>

                    <div class="col-md-3">
                      <label class="text-black" >Blood Type</label>
                      <select class="form-control" name="blood_type" >
                        <option value="<?php echo $blood_type; ?>" selected> <?php echo $blood_type; ?> </option>
                        <option value="O +">O +</option>
                          <option value="O -">O -</option>
                          <option value="A +">A +</option>               
                          <option value="A -">A-</option>
                          <option value="B +">B +</option>
                          <option value="B -">B -</option>
                          <option value="AB +">AB +</option>                      
                          <option value="AB -">AB -</option>
                      </select>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-4">
                      <label class="text-black" >PHILHEALTH ID</label>
                      <input name="ph_id" type="text" class="form-control" value="<?php echo $ph_id; ?>">
                    </div>

                    <div class="col-md-4">
                      <label class="text-black" >TIN ID</label>
                      <input name="tin_id" type="text" class="form-control" value="<?php echo $tin_id; ?>">
                    </div>

                    <div class="col-md-4">
                      <label class="text-black" >Employment Status</label>
                      <select class="form-control" name="emp_stats" >
                          <option value="<?php echo $employment_status; ?>" selected><?php echo $employment_status; ?></option>
                          <option value="Contract Employee">Contract Employee</option>
                          <option value="Full-Time Employee">Full-Time Employee</option>
                          <option value="Independent Contractor">Independent Contractor</option>               
                          <option value="Part-Time Employee">Part-Time Employee</option>
                          <option value="Self-Employed">Self-Employed</option>
                          <option value="Temporary or Seasonal Employee">Temporary or Seasonal Employee</option>
                          <option value="Unemployed">Unemployed</option>                      
                          <option value="Volunteer">Volunteer</option>
                          <option value="Retired">Retired</option>   
                          <option value="Student">Student</option>                  
                          <option value="others">others</option>
                          </select>
                    </div>
                  </div>

                  <div class="row form-group">

                    <div class="col-md-3">
                      <label class="text-black" >Educational Attainment</label>
                      <input name="educ_attainment" type="text" class="form-control" value="<?php echo $educational_attainment; ?>">
                    </div>
                    <div class="col-md-3">
                      <label class="text-black" >Emergency Contact Person<span class="text-danger"> *</span></label>
                      <input name="emergency_contact_person" type="text" class="form-control" value="<?php echo $contact_person; ?>" required>
                    </div>

                    <div class="col-md-3">
                      <label class="text-black" >Emergency Contact Number<span class="text-danger"> *</span></label>
                      <input name="emergency_contact_no" type="text" class="form-control" value="<?php echo $contact_person_no; ?>" required>
                    </div>

                    <div class="col-md-3">
                      <label class="text-black" >Valid ID</label>
                      <select class="form-control mt-4" name="valid_id" >
                        <option value="<?php echo $valid_id; ?>" selected> <?php echo $valid_id; ?> </option>
                        <option value="SSS">SSS</option>
                        <option value="PHILHEALTH">PHILHEALTH</option>
                        <option value="Pag-ibig">Pag-ibig</option>
                        <option value="UMID">UMID</option>
                        <option value="UMID">Driver's License</option>
                        <option value="UMID">Voter's ID</option>
                        <option value="UMID">Barangay ID</option>
                      </select>
                    </div>

                  </div>
                  <div class="row form-group">
                    
                    <div class="col-md-4">
                      <label class="text-black">Valid ID Number</label>
                      <input name="id_number" type="text" class="form-control" value="<?php echo $id_number; ?>">
                    </div>

                    <div class="col-md-4">
                      <label class="text-black">Email Address</label>
                      <input name="email_add" type="email" class="form-control" value="<?php echo $email_address; ?>" required>
                    </div>
                    <?php 
                    if($access_Type == 'PWD'){
                      ?>
                      <div class="col-md-4">
                        <label class="text-black">Disability<span class="text-danger"> *</span></label>
                        <select class="form-control" name="disabality" required>
                            <option value="<?php echo $disability; ?>" selected><?php echo $disability; ?></option>
                            <option value="Behavioural Disability">Behavioural Disability</option>
                            <option value="Emotional Disability">Emotional Disability</option>
                            <option value="Sensory Imapaired Disorder">Sensory Imapaired Disorder</option>               
                            <option value="Phyisical Disability">Phyisical Disability</option>
                            <option value="Developmental Disability">Developmental Disability</option>
                          </select>
                      </div>
                      <?php
                    }
                    ?>
                    <input type="hidden" name="id" value="<?php echo $session_id ?>" />
                  </div>
                  <div class="float-right">
                    <button name = "update_profile" type="submit" class="btn btn-block btn-b bg-gradient btn-sm">Save</button>
                  </div>
                </div>
              </form>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 BSIT 3I. All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
</body>
</html>
<!-- script for getting file -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

<script> // script functions for the table
  $(function () {

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    <?php  if(isset($_SESSION['success'])){ ?>
      toastr.success("<?php echo $_SESSION['success'];  ?>")
      <?php
      unset($_SESSION['success']);
    }else{ ?>
      toastr.error("<?php echo $_SESSION['error'];  ?>")
      <?php
      unset($_SESSION['error']);
    }
    ?> 
  });
</script>
</body>
</html>
