<?php include ("../dbconn.php") ?>

<!-- ./modal -->
<div id="pwd_edit<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
        <div div class="modal-header bg-light">
          <h5 class="modal-title text-lightblue"><i class="fas fa-edit"></i>&nbsp;&nbsp;Update Status</h5>
            <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php 
          $query_info = "SELECT * FROM pwd_db where pwd_id = '$id'";
          $result_info = mysqli_query($conn, $query_info);
          while($row_info = mysqli_fetch_assoc($result_info)) {
            $status = $row_info['status'];
          }
        ?>
        <form class="form-horizontal" method="POST" action="phpaction/pwd_update_status.php" name="form">
            <div class="modal-body">
                <div class="form-group">
                  <div class="input-group input-group">
                    <label class="col-sm-4">Status</label>
                    <select class="form-control" name="status" required>
                      <option value="<?php echo $status ?>" selected> <?php echo $status ?> </option>
                      <option value="Pending">Pending</option>
                      <option value="Approved">Approved</option>
                      <option value="Declined">Declined</option>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="pwd_id" value="<?php echo $id; ?>" required></input>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-b btn-sm" name="update_pwd_status" style="float: right;"><i class="fa fa-paper-plane"></i>&nbspUpdate</button>
            </div>
        </form>
      </div>
   </div>
</div>