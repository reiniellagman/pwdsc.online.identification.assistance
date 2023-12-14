<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
    </ul>
    
    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user-cog"></i>
          </a>
          <?php 
            $session_id=$_SESSION['id'];; 
          ?>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a data-toggle="modal" class="dropdown-item" title="View Identification Card" href="#user_view_profile<?php echo $session_id; ?>" >
              <i class="fa fas fa-user"></i>&nbsp;&nbsp;Change Password
            </a>
            <div class="dropdown-divider"></div>
          
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
      </ul>
  </nav>


  <!-- ./modal -->
<div id="user_view_profile<?php echo $session_id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
        <div class="modal-content">
            <div div class="modal-header bg-light">
                <h5 class="modal-title text-lightblue"><i class="fa fas fa-user"></i>&nbsp;&nbsp;Change Password</h5>
                <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="phpaction/update_password.php" name="form">
                <div class="modal-body">
                    <div class="form-group">
                      <div class="input-group input-group">
                        <input type="password" class="form-control" placeholder="Old Password" name="old_password" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group">
                        <input type="password" class="form-control" placeholder="New Password" name="password" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required />
                      </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $session_id ?>"/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-b btn-sm" name="update_pass_btn" style="float: right;"><i class="fa fa-paper-plane"></i>&nbspSubmit</button>
                </div>
            </form>
            </div>
        </div>
   </div>
</div>