<?php include ("../dbconn.php") ?>


<!-- ./modal -->
<div id="user_view_document<?php echo $username; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div div class="modal-header bg-light">
          <h5 class="modal-title text-lightblue"><i class="fas fa-file-pdf"></i>&nbsp;&nbsp;File</h5>
            <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php 
            $query_Document = "SELECT * FROM uploaded_file WHERE username = '$username' AND file_type = '2'";
            $result_Document = mysqli_query($conn, $query_Document);
            $row_Document = mysqli_fetch_assoc($result_Document);
            $document = $row_Document['file_directory'];
        ?>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="phpaction/save_file.php" name="form">
            <div class="form-group">
              <label for="exampleInputFile">Change Medical Records<span class="text-danger"> Allowed PDF File only.</span></label>
              <div class="input-group">
                  <div class="custom-file">
                      <input type="file" required name="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
              </div>
            </div> 
            <input type="hidden" name="username" value="<?php echo $username ?>" />
            <div class="form">
              <div class="">
                <button name = "submit_file" type="submit" class="btn btn-block btn-b bg-gradient btn-sm">Save</button>
              </div>
            </div>
          </form><br/>
          <div class="form-group text-center">
              <embed src="<?php echo $document; ?>" style="width: 100%; height: 800px;"/>
          </div>
        </div>
      </div>
   </div>
</div>