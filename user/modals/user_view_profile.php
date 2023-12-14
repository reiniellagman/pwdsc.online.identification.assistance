<?php include ("../dbconn.php") ?>
<?php 
    $query_info = "SELECT * FROM uploaded_file WHERE username = '$username' AND file_type = '1'";
    $result_info = mysqli_query($conn, $query_info);
    $row2 = mysqli_fetch_assoc($result_info);
    $profile = $row2['file_directory'];
?>

<!-- ./modal -->
<div id="user_view_profile<?php echo $username; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
        <div div class="modal-header bg-light">
          <h5 class="modal-title text-lightblue"><i class="fas fa-id-card"></i>&nbsp;&nbsp;Profile</h5>
            <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group text-center">
                <img src="<?php echo $profile ?>" style="width: 60%; height: 60%;">
            </div>

            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="phpaction/save_pict.php" name="form">
                <div class="form-group">
                    <label for="exampleInputFile">Change Profile Picture<span class="text-danger"> Image file type only.</span></label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" required name="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose photo</label>
                        </div>
                    </div>
                </div> 
                <input type="hidden" name="username" value="<?php echo $username ?>" />
                <div class="form">
                    <div class="">
                        <button name = "submit_picture" type="submit" class="btn btn-block btn-b bg-gradient btn-sm">Save</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
   </div>
</div>