<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../images/logo.png" alt="PWD | SC" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PWD | SC</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a data-toggle="modal" class="btn btn-a edit" title="View Identification Card" href="#user_identification" ><i class="fa fa-id-card"></i>&nbsp;&nbsp;Identification Card</a>
          </li>
        </ul>
      </div>
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
    </div>
  </nav>

<!-- ./modal -->
<div id="user_identification" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div div class="modal-header bg-light">
                <h5 class="modal-title text-lightblue"><i class="fas fa-id-card"></i>&nbsp;&nbsp;Identification Card</h5>
                <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">

                <?php 
                $session_id=$_SESSION['id'];
                $access_Type = $_SESSION['access_type'];

                if($access_Type == 'PWD'){
                ?>
                  <div class='col-sm-12' id="pwd_capture">
                    <div class='card-body' style="border: 2px solid black;">
                      <div class='text-center'>
                          <img class="mr-3" src="../images/logo.png" alt="user image" style="width: 70px; height: 70px;"/>
                          <span class='font-weight-bold h5'>PWD and Senior Citizen Online Identification Assistant</span>
                      </div>

                      <?php
                        $query_profilePict = "SELECT * FROM uploaded_file WHERE username = '$username' AND file_type = '1'";
                        $result_profilePict = mysqli_query($conn, $query_profilePict);
                        $row_profilePict = mysqli_fetch_assoc($result_profilePict);
                        $profile = $row_profilePict['file_directory'];

                        $session_id=$_SESSION['id'];

                          $query = "SELECT * FROM pwd_db WHERE pwd_id = '$session_id'";
                          $result = mysqli_query($conn, $query);
                          $row_info = mysqli_fetch_assoc($result);
                          $name = $row_info['first_name'].' '.$row_info['middle_name'].' '.$row_info['last_name'];
                          $first_name = $row_info['first_name'];
                          $middle_name = $row_info['middle_name'];
                          $last_name = $row_info['last_name'];
                          $dob = $row_info['dob'];
                          $age = $row_info['age'];
                          $gender = $row_info['gender'];
                          $birth_place = $row_info['birth_place'];
                          $civil_status = $row_info['civil_status'];
                          $blood_type = $row_info['blood_type'];
                          $ph_id = $row_info['ph_id'];
                          $tin_id = $row_info['tin_id'];
                          $religion = $row_info['religion'];
                          $contact_number = $row_info['contact_number'];
                          $email_address = $row_info['email_address'];
                          $province = $row_info['province'];
                          $city_town = $row_info['city_town'];
                          $address = $row_info['address'];
                          $educational_attainment = $row_info['educational_attainment'];
                          $employment_status = $row_info['employment_status'];
                          $contact_person = $row_info['contact_person'];
                          $contact_person_no = $row_info['contact_person_no'];
                          $valid_id = $row_info['valid_id'];
                          $id_number = $row_info['id_number'];
                          $disability = $row_info['disability'];
                          $username = $row_info['username'];
                          $status = $row_info['status'];
                          $idNumber = "PWD-0000000-$session_id";
                        
                      ?>
                      <div class='row'>
                        <div class='col-sm-6 mt-3'>
                            <div class="form-group text-center">
                              <img class="profile-user-img img-fluid img-box"
                              src="<?php echo $profile ?>"
                              alt="User profile picture"
                              style="width: 100%; height: 100%;">
                            </div>
                        </div>

                        <div class='col-sm-6 mt-10'>
                          <div class="form-group">
                            <label htmlFor="" class="col-sm-6 col-form-label">ID Number</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $idNumber ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Full Name</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $last_name.', '.$first_name.' '.$middle_name; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Type of Disability</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $disability; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Address</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $address.', '.$city_town.', '.$province; ?></div>

                            <br/>
                            
                        </div>
                        </div>
                      </div>
                    </div>

                    <br/>

                    <div class='card-body' style="border: 2px solid black;">
                      <div class='text-center'>
                          <img class="mr-3" src="../images/logo.png" alt="user image" style="width: 70px; height: 70px;"/>
                          <span class='font-weight-bold h5'>PWD and Senior Citizen Online Identification Assistant</span>
                      </div>

                      <div class='row'>
                        <div class='col-sm-6 mt-3'>
                            <div class="form-group text-center">
                              <?php
                                include('../phpqrcode/qrlib.php');
                                $query = "SELECT * FROM pwd_db WHERE pwd_id = '$session_id'";
                                $first_name = $row_info['first_name'];
                                $middle_name = $row_info['middle_name'];
                                $last_name = $row_info['last_name'];
                                $contact_person = $row_info['contact_person'];
                                $contact_person_no = $row_info['contact_person_no'];

                                // how to build raw content - QRCode with simple Business Card (VCard)

                                $tempDir = "../images/QR/".$username."-".$session_id."";

                                // here our data
                                $web_address = 'https://pwdsc.000webhostapp.com/';

                                // generating
                                QRcode::png($web_address, $tempDir.'.png', QR_ECLEVEL_L, 3);

                                // displaying
                                echo '<img class="profile-user-img img-fluid img-box" src="'.$tempDir.'.png" style="width: 100%; height: 100%;" />';
                              ?>
                            </div>
                        </div>

                        <div class='col-sm-6 mt-10'>
                          <div class="form-group">

                            <label htmlFor="" class="col-sm-6 col-form-label">DOB</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $dob; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">SEX</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $gender; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Blood Type</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $blood_type; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Parent/Guardian</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $contact_person; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Contact No.</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $contact_person_no; ?></div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                  <div class="float-right">
                    <button type="button" id = "pwd_screenshot" class="btn btn-block btn-b bg-gradient btn-sm">Download</button>
                  </div>
                  <script type="text/javascript">
                    document.getElementById("pwd_screenshot").onclick = function() {
                      const screenshotTarget = document.getElementById("pwd_capture");

                      html2canvas(screenshotTarget).then((canvas) => {
                        const base64image = canvas.toDataURL("image/png");
                        var anchor = document.createElement("a");
                        anchor.setAttribute("href", base64image);
                        anchor.setAttribute("download", "PWD_ID");
                        anchor.click();
                        anchor.remove();
                      })
                    }
                  </script>
                  <?php
                }
                else{
                  ?>
                  <div class='col-sm-12' id="sc_capture">
                    <div class='card-body' style="border: 2px solid black;">
                      <div class='text-center'>
                          <img class="mr-3" src="../images/logo.png" alt="user image" style="width: 70px; height: 70px;"/>
                          <span class='font-weight-bold h5'>PWD and Senior Citizen Online Identification Assistant</span>
                      </div>

                      <?php
                        $query_profilePict = "SELECT * FROM uploaded_file WHERE username = '$username' AND file_type = '1'";
                        $result_profilePict = mysqli_query($conn, $query_profilePict);
                        $row_profilePict = mysqli_fetch_assoc($result_profilePict);
                        $profile = $row_profilePict['file_directory'];
                        
                        $session_id=$_SESSION['id'];

                          $query = "SELECT * FROM sc_db WHERE sc_id = '$session_id'";
                          $result = mysqli_query($conn, $query);
                          $row_info = mysqli_fetch_assoc($result);
                          $name = $row_info['first_name'].' '.$row_info['middle_name'].' '.$row_info['last_name'];
                          $first_name = $row_info['first_name'];
                          $middle_name = $row_info['middle_name'];
                          $last_name = $row_info['last_name'];
                          $dob = $row_info['dob'];
                          $age = $row_info['age'];
                          $gender = $row_info['gender'];
                          $birth_place = $row_info['birth_place'];
                          $civil_status = $row_info['civil_status'];
                          $blood_type = $row_info['blood_type'];
                          $ph_id = $row_info['ph_id'];
                          $tin_id = $row_info['tin_id'];
                          $religion = $row_info['religion'];
                          $contact_number = $row_info['contact_number'];
                          $email_address = $row_info['email_address'];
                          $province = $row_info['province'];
                          $city_town = $row_info['city_town'];
                          $address = $row_info['address'];
                          $educational_attainment = $row_info['educational_attainment'];
                          $employment_status = $row_info['employment_status'];
                          $contact_person = $row_info['contact_person'];
                          $contact_person_no = $row_info['contact_person_no'];
                          $valid_id = $row_info['valid_id'];
                          $id_number = $row_info['id_number'];
                          $username = $row_info['username'];
                          $status = $row_info['status'];
                          $idNumber = "SC-0000000-$session_id";
                      ?>
                      <div class='row'>
                        <div class='col-sm-6 mt-3'>
                            <div class="form-group text-center">
                              <img class="profile-user-img img-fluid img-box"
                              src="<?php echo $profile ?>"
                              alt="User profile picture"
                              style="width: 100%; height: 100%;">
                            </div>
                        </div>

                        <div class='col-sm-6 mt-10'>
                          <div class="form-group">
                            <label htmlFor="" class="col-sm-6 col-form-label">ID Number</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $idNumber ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Full Name</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $last_name.', '.$first_name.' '.$middle_name; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Address</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $address.', '.$city_town.', '.$province; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">DOB</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $dob; ?></div>

                            <br/>
                            
                        </div>
                        </div>
                      </div>
                    </div>

                    <br/>

                    <div class='card-body' style="border: 2px solid black;">
                      <div class='text-center'>
                          <img class="mr-3" src="../images/logo.png" alt="user image" style="width: 70px; height: 70px;"/>
                          <span class='font-weight-bold h5'>PWD and Senior Citizen Online Identification Assistant</span>
                      </div>

                      <div class='row'>
                        <div class='col-sm-6 mt-3'>
                            <div class="form-group text-center">
                              <?php
                                include('../phpqrcode/qrlib.php');
                                $query = "SELECT * FROM pwd_db WHERE pwd_id = '$session_id'";
                                $first_name = $row_info['first_name'];
                                $middle_name = $row_info['middle_name'];
                                $last_name = $row_info['last_name'];
                                $contact_person = $row_info['contact_person'];
                                $contact_person_no = $row_info['contact_person_no'];

                                // how to build raw content - QRCode with simple Business Card (VCard)

                                $tempDir = "../images/QR/".$username."-".$session_id."";

                                // here our data
                                $web_address = 'https://pwdsc.000webhostapp.com/';

                                // generating
                                QRcode::png($web_address, $tempDir.'.png', QR_ECLEVEL_L, 3);

                                // displaying
                                echo '<img class="profile-user-img img-fluid img-box" src="'.$tempDir.'.png" style="width: 100%; height: 100%;" />';
                              ?>
                            </div>
                        </div>

                        <div class='col-sm-6 mt-10'>
                          <div class="form-group">
                           

                            <label htmlFor="" class="col-sm-6 col-form-label">SEX</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $gender; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Blood Type</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $blood_type; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Emergency Contact Person</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $contact_person; ?></div>

                            <label htmlFor="" class="col-sm-6 col-form-label">Contact No.</label>
                            <div class="form-control text-wrap" style="height: auto;"><?php echo $contact_person_no; ?></div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br/>
                  <div class="float-right">
                    <button type="button" id = "sc_screenshot" class="btn btn-block btn-b bg-gradient btn-sm">Download</button>
                  </div>
                  <script type="text/javascript">
                    document.getElementById("sc_screenshot").onclick = function() {
                      const screenshotTarget = document.getElementById("sc_capture");

                      html2canvas(screenshotTarget).then((canvas) => {
                        const base64image = canvas.toDataURL("image/png");
                        var anchor = document.createElement("a");
                        anchor.setAttribute("href", base64image);
                        anchor.setAttribute("download", "SENIORCITIZEN_ID");
                        anchor.click();
                        anchor.remove();
                      })
                    }
                  </script>
                  <?php
                }
                ?>
                </div>
            </div>
        </div>
   </div>
</div>


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