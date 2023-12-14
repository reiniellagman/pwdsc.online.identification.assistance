<!DOCTYPE html>
<html lang="en">
<?php 
include('../dbconn.php');
include ("header.php");
include('session.php'); 
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include ("navbar.php") ?>
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
            <a href="dashboard.php" class="nav-link active">
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
            <a href="senior.php" class="nav-link">
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
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                  $sql_pwd_pending = "SELECT * FROM pwd_db WHERE status = 'Pending'"; 
                  $result_pwd_pending = mysqli_query($conn, $sql_pwd_pending);
                  $count_pwd_pending = mysqli_num_rows($result_pwd_pending);
                ?>
                <h3><?php echo $count_pwd_pending ?></h3>

                <p>PWD Pending Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="pwd.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                  $sql_pwd_approved = "SELECT * FROM pwd_db WHERE status = 'Approved'"; 
                  $result_pwd_approved = mysqli_query($conn, $sql_pwd_approved);
                  $count_pwd_approved = mysqli_num_rows($result_pwd_approved);
                ?>
                <h3><?php echo $count_pwd_approved ?></h3>

                <p>PWD Approved Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="pwd.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                  $sql_pwd_disapproved = "SELECT * FROM pwd_db WHERE status = 'Declined'"; 
                  $result_pwd_disapproved = mysqli_query($conn, $sql_pwd_disapproved);
                  $count_pwd_disapproved = mysqli_num_rows($result_pwd_disapproved);
                ?>
                <h3><?php echo $count_pwd_disapproved ?></h3>

                <p>PWD Declined Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="pwd.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                  $sql_sc_pending = "SELECT * FROM sc_db WHERE status = 'Pending'"; 
                  $result_sc_pending = mysqli_query($conn, $sql_sc_pending);
                  $count_sc_pending = mysqli_num_rows($result_sc_pending);
                ?>
                <h3><?php echo $count_sc_pending ?></h3>

                <p>Senior Citizens Pending Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="senior.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                  $sql_sc_approved = "SELECT * FROM sc_db WHERE status = 'Approved'"; 
                  $result_sc_approved = mysqli_query($conn, $sql_sc_approved);
                  $count_sc_approved = mysqli_num_rows($result_sc_approved);
                ?>
                <h3><?php echo $count_sc_approved ?></h3>

                <p>Senior Citizens Approved Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="senior.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                  $sql_sc_disapproved = "SELECT * FROM sc_db WHERE status = 'Declined'"; 
                  $result_sc_disapproved = mysqli_query($conn, $sql_sc_disapproved);
                  $count_sc_disapproved = mysqli_num_rows($result_sc_disapproved);
                ?>
                <h3><?php echo $count_sc_disapproved ?></h3>

                <p>Senior Citizens Declined Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="senior.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
</body>
</html>
