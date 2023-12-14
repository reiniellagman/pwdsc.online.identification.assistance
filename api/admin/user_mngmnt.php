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
            <a href="senior.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Senior Citizens
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user_mngmnt.php" class="nav-link active">
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
            <h1>User Management</h1>
          </div>
          <div class="col-sm-6">
            <div class="float-right">
                <a class="btn btn-b" data-toggle="modal" data-target="#add_user"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add User</a>
            </div>
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
                <h3 class="card-title">List of Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $query = "SELECT * FROM admin_db";
                    $result = mysqli_query($conn, $query);
                    $counter = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['admin_id'];

                  ?>
                    <tr>
                      <td><?php echo $counter; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['password']; ?></td>
                      <td>
                        <a data-toggle="modal" class="btn btn-a btn-sm" title="Update User" href="#user_edit<?php echo $id; ?>" name="selector" value="<?php echo $id; ?>"><i class="fa fa-edit"></i></a>
                      </td>
                      <?php include("modals/user_edit.php"); ?>
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
  <?php include("modals/add_users.php"); ?>
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
