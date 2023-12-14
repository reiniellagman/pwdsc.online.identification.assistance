<?php include ("../dbconn.php") ?>

<!-- ./modal -->
<div id="senior_view_more_info<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div div class="modal-header bg-light">
          <h5 class="modal-title text-lightblue"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;PWD Personnal Info</h5>
            <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <?php 
                    $query_info = "SELECT * FROM sc_db where sc_id = '$id'";
                    $result_info = mysqli_query($conn, $query_info);
                    $row_info = mysqli_fetch_assoc($result_info);
                    $birth_place = $row_info['birth_place'];
                    $civil_status = $row_info['civil_status'];
                    $blood_type = $row_info['blood_type'];
                    $ph_id = $row_info['ph_id'];
                    $tin_id = $row_info['tin_id'];
                    $religion = $row_info['religion'];
                    $educational_attainment = $row_info['educational_attainment'];
                    $employment_status = $row_info['employment_status'];
                    $contact_person = $row_info['contact_person'];
                    $contact_person_no = $row_info['contact_person_no'];
                    $valid_id = $row_info['valid_id'];
                    $id_number = $row_info['id_number'];
                  ?>
                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Birth Place:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $birth_place; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Civil Status:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $civil_status; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Blood Type:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $blood_type; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Philhealth ID:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $ph_id; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Tin ID:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $tin_id; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Religion:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $religion; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Educational Attainment:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $educational_attainment; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Employment Status:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $employment_status; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Emergency Contact Person:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $contact_person; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Emergency Contact Number:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $contact_person_no; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Valid ID:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $valid_id; ?>" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group">
                      <label class="col-sm-4">Valid ID Number:</label>
                      <input class="form-control col-sm-8" type="text" value = " <?php echo $id_number; ?>" disabled>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-b btn-sm close" aria-label="Close" name="update" style="float: right;">Close</button>
            </div>
      </div>
   </div>
</div>