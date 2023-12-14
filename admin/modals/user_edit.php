<?php include ("../dbconn.php") ?>


<!-- ./modal -->
<div id="user_edit<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
        <div div class="modal-header bg-light">
          <h5 class="modal-title text-lightblue"><i class="fas fa-edit"></i>&nbsp;&nbsp;Update Password</h5>
            <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php 
          $query_info = "SELECT * FROM sc_db where sc_id = '$id'";
          $result_info = mysqli_query($conn, $query_info);
          $row_info = mysqli_fetch_assoc($result_info);
          $status = $row_info['status'];
        ?>
        <form class="form-horizontal" method="POST" action="phpaction/user_update.php" name="form">
            <div class="modal-body">
                <?php
                // script for shuffled password
                    $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890!@#$%^&*()";
                ?>
                <div class="form-group">
                    <div class="form-group w-100 pt-sm-3">
                        <label>Password</label>
                        <input type="text" name="password" id="focusedInput" type="text" placeholder = "Password" Value="<?php echo substr(str_shuffle($string), 0, 8); ?>" required class="form-control">
                    </div>

                    <div class="card card-sm text-xs" style="background-color: #ffecb4; border-width: 1px; border-background: #ffc107">
                        <div class="card-body p-2">
                            <b>Note:</b> Copy the password on the box first before you click the "<b>Submit</b>" button.
                        </div>
                    </div>
                </div>
                <input type="hidden" name="admin_id" value="<?php echo $id; ?>" required></input>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-b btn-sm" name="edit_user_btn" style="float: right;"><i class="fa fa-paper-plane"></i>&nbspUpdate</button>
            </div>
        </form>
      </div>
   </div>
</div>