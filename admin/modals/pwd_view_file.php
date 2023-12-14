<?php include ("../dbconn.php") ?>


<!-- ./modal -->
<div id="pwd_view_document<?php echo $username; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
            <div class="form-group text-center">
                <embed src="<?php echo $document; ?>" style="width: 100%; height: 800px;"/>
            </div>
        </div>
      </div>
   </div>
</div>