<!DOCTYPE html>
<html lang="en">
<?php 
include('../dbconn.php');
include('session.php'); 
include ("header.php");
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
    <?php include 'navbar.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../images/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PWD | SC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashoard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pwd.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                PWD
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="senior.php" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Senior Citizens
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user_mngmnt.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Management
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SENIOR CITIZENS OVERVIEW</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Senior Citizens</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">SENIOR CITIZEN LIST OF REQUEST</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>No.</th>
                      <th>Profile</th>
                      <th>Full Name</th>
                      <th>Birthdate</th>
                      <th>Age </th>
                      <th>Gender</th>
                      <th>Contact Number</th>
                      <th>Address</th>
                      <th>Email Address</th>
                      <th>Username</th>
                      <th>Document</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $query = "SELECT * FROM sc_db";
                    $result = mysqli_query($conn, $query);
                    $counter = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['sc_id'];

                    $username = $row['username'];
                    $query_profilePict = "SELECT * FROM uploaded_file WHERE username = '$username' AND file_type = '1'";
                    $result_profilePict = mysqli_query($conn, $query_profilePict);
                    $row_profilePict = mysqli_fetch_assoc($result_profilePict);
                    $profile = $row_profilePict['file_directory'];

                    $query_Document = "SELECT * FROM uploaded_file WHERE username = '$username' AND file_type = '2'";
                    $result_Document = mysqli_query($conn, $query_Document);
                    $row_Document = mysqli_fetch_assoc($result_Document);
                    $document = $row_Document['file_directory'];

                  ?>
                    <tr>
                      <td><?php echo $counter; ?></td>
                      <td class="text-center" width="10%">
                        <a data-toggle="modal" class="btn btn-sm btn-a edit" title="View Profile" href="#pwd_view_profile<?php echo $username; ?>" href="#pwd_view_profile"><img src="<?php echo $profile ?>" style="width: 60%; height: 60%;"></a>
                      </td>
                      <td><?php echo $row['last_name'].', '.$row['first_name'].' '.$row['middle_name']; ?></td>
                      <td><?php echo $row['dob']; ?></td>
                      <td><?php echo $row['age']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['contact_number']; ?></td>
                      <td><?php echo $row['address'].', '.$row['city_town'].', '.$row['province']; ?></td>
                      <td><?php echo $row['email_address']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td class="text-center">
                        <a data-toggle="modal" class="btn btn-a edit" title="View Documents" href="#pwd_view_document<?php echo $username; ?>" href="#pwd_view_document"><i class="fa fa-file-pdf"></i></a>
                      </td>
                      <td class="text-center">
                        <?php 
                          if($row['status'] == "Pending"){
                            ?>
                            <span class="badge badge-warning">Pending</span>
                            <?php
                         }elseif($row['status'] == "Approved"){
                          ?>
                            <span class="badge badge-success">Approved</span>
                            <?php
                         }elseif($row['status'] == "Declined"){
                          ?>
                          <span class="badge badge-danger">Declined</span>
                          <?php
                         }
                        ?>
                      </td>
                      <td class="text-center">
                        <a data-toggle="modal" class="btn btn-sm btn-a edit" title="View More Info" href="#senior_view_more_info<?php echo $id; ?>" href="#senior_view_more_info"><i class="fa fa-eye"></i></a>
                        &nbsp;
                        <a data-toggle="modal" class="btn btn-a btn-sm" title="Update Status" href="#senior_edit<?php echo $id; ?>" name="selector" value="<?php echo $id; ?>"><i class="fa fa-edit"></i></a>
                      </td>
                      <?php include("modals/pwd_view_profile.php"); ?>
                      <?php include("modals/pwd_view_file.php"); ?>
                      <?php include("modals/senior_update_modal.php"); ?>
                      <?php include("modals/senior_view_modal.php"); ?>
                    </tr>
                    <?php
                      $counter++;
                    } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include ("footer.php") ?>
</div>
<!-- ./wrapper -->

<?php include ("scripts.php") ?>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</script>
</body>
</html>
