<?php include ("../dbconn.php") ?>


<!-- ./modal -->
<div id="pwd_view_profile<?php echo $username; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
        <div div class="modal-header bg-light">
          <h5 class="modal-title text-lightblue"><i class="fas fa-id-card"></i>&nbsp;&nbsp;Profile</h5>
            <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php 
          $query_info = "SELECT * FROM uploaded_file WHERE username = '$username' AND file_type = '1'";
          $result_info = mysqli_query($conn, $query_info);
          $row2 = mysqli_fetch_assoc($result_info);
          $profile = $row2['file_directory'];
        ?>
        <div class="modal-body">
            <div class="form-group text-center">
                <img src="<?php echo $profile ?>" style="width: 60%; height: 60%;">
            </div>
        </div>
      </div>
   </div>
</div>