<!doctype html>
<html lang="en">
<?php include_once("header.php"); ?>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <?php include_once("navbar.php"); ?>

    <!-- MAIN -->

    <div class="slide-item overlay" style="background-image: url('images/sc-cover.jpg')">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6 align-self-center">
            <h1 class="heading mb-3">Senior Citizen's Registration</h1>
              <p class="lead text-white">
                Welcome to our Senior Citizen's Registration page, where we prioritize the well-being and engagement of our senior community members. Signing up is a seamless process designed with simplicity in mind. By completing the registration, seniors gain access to a variety of tailored services, events, and resources aimed at enhancing their quality of life. Join our community today and take advantage of the benefits we offer to ensure a fulfilling and supportive experience for our cherished senior citizens.
              </p>
          </div>
        </div>
      </div>  
    </div>

    <div class="site-section">
      <div class="container">
      <div class="col-lg-6 align-self-center">
</div>
<div>
              <img src="images/senior_requirements.jpg" alt="Image" class="img-fluid">
          <div>
          <br/><br/><br/><br/>
          <div class="col-lg-12 mb-5">
          <form method="POST" action="phpaction/sc_register_save.php" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                  <label class="text-black" >First Name<span class="text-danger"> *</span></label>
                  <input name="fname" type="text" class="form-control" required >
                </div>
                <div class="col-md-4">
                  <label class="text-black" >Middle Name<span class="text-danger"> *</span></label>
                  <input type="text" class="form-control" name="mname" required>
                </div>
                <div class="col-md-4">
                  <label class="text-black" >Last Name<span class="text-danger"> *</span></label>
                  <input type="text" class="form-control" name="lname" required>
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-3">
                  <label class="text-black" >Date of Birth<span class="text-danger"> *</span></label>
                  <input type="date" class="form-control" name="dob" required >
                </div>

                <div class="col-md-3">
                  <label class="text-black" >Birth Place<span class="text-danger"> *</span></label>
                  <input type="text" class="form-control" name="b_place" required>
                </div>

                <div class="col-md-3">
                  <label class="text-black" >Age<span class="text-danger"> *</span></label>
                  <input name="age" min="2" max="3" type="number" class="form-control" required>
                </div>

                <div class="col-md-3 mb-3 mb-md-0">
                  <label class="text-black" >Sex<span class="text-danger"> *</span></label>
                  <select class="form-select" name="sex" required>
                    <option value=""> -- </option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Female">Other</option>
                  </select>
                </div>
                
              </div>

              <div class="row form-group">

                <div class="col-md-4">
                  <label class="text-black" >Contact Number<span class="text-danger"> *</span></label>
                  <input name="contact_no" min="11" max="11" Placeholder="09xxxxxxxxx" type="number" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Blk/Lot/Ph/Street/Barangay<span class="text-danger"> *</span></label>
                  <input name="address_blk" type="text" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                  <label class="text-black" >Municipality / City<span class="text-danger"> *</span></label>
                  <select class="form-select" name="address_municipality" required>
                    <option value=""> Choose Municipality / City </option>
                    <option value="Quezon City">Quezon City</option>
                    <option value="Manila">Manila</option>
                    <option value="Davao City">Davao City</option>               
                    <option value="Caloocan">Caloocan</option>
                    <option value="Zamboanga City">Zamboanga City</option>
                    <option value="Cebu City">Cebu City</option>
                    <option value="Antipolo">Antipolo</option>                      
                    <option value="Taguig">Taguig</option>
                    <option value="Pasig">Pasig</option>
                    <option value="Cagayan de Oro">Cagayan de Oro</option>                      
                    <option value="others">others</option>
                  </select>
                </div>
                
              </div>
              
              <div class="row form-group">
                <div class="col-md-3 mb-3 mb-md-0">
                  <label class="text-black" >Province<span class="text-danger"> *</span></label>
                  <select class="form-select" name="address_province" required>
                    <option value=""> -- </option>
                    <option value="Abra">Abra</option>
                    <option value="Agusan del Norte">Agusan del Norte</option>
                    <option value="Agusan del Sur">Agusan del Sur</option>
                    <option value="Aklan">Aklan</option>
                    <option value="Albay">Albay</option>
                    <option value="Antique">Antique</option>
                    <option value="Apayao">Apayao</option>
                    <option value="Aurora">Aurora</option>
                    <option value="Basilan">Basilan</option>
                    <option value="Bataan">Bataan</option>
                    <option value="Batanes">Batanes</option>
                    <option value="Batangas">Batangas</option>
                    <option value="Benguet">Benguet</option>
                    <option value="Biliran">Biliran</option>
                    <option value="Bohol">Bohol</option>
                    <option value="Bukidnon">Bukidnon</option>
                    <option value="Bulacan">Bulacan</option>
                    <option value="Cagayan">Cagayan</option>
                    <option value="Camarines Norte">Camarines Norte</option>
                    <option value="Camarines Sur">Camarines Sur</option>
                    <option value="Camiguin">Camiguin</option>
                    <option value="Capiz">Capiz</option>
                    <option value="Catanduanes">Catanduanes</option>
                    <option value="Cavite">Cavite</option>
                    <option value="Cebu">Cebu</option>
                    <option value="Cotabato">Cotabato</option>
                    <option value="Davao de Oro">Davao de Oro</option>
                    <option value="Davao del Norte">Davao del Norte</option>
                    <option value="Davao del Sur">Davao del Sur</option>
                    <option value="Davao Occidental">Davao Occidental</option>
                    <option value="Davao Oriental">Davao Oriental</option>
                    <option value="Dinagat Islands">Dinagat Islands</option>
                    <option value="Eastern Samar">Eastern Samar</option>
                    <option value="Guimaras">Guimaras</option>
                    <option value="Ifugao">Ifugao</option>
                    <option value="Ilocos Norte">Ilocos Norte</option>
                    <option value="Ilocos Sur">Ilocos Sur</option>
                    <option value="Iloilo">Iloilo[</option>
                    <option value="Isabela">Isabela</option>
                    <option value="Kalinga">Kalinga</option>
                    <option value="La Union">La Union</option>
                    <option value="La Union">La Union</option>
                    <option value="Lanao del Norte">Lanao del Norte</option>
                    <option value="Lanao del Sur">Lanao del Sur</option>
                    <option value="Leyte">Leyte[</option>
                    <option value="Maguindanao del Norte">Maguindanao del Norte</option>
                    <option value="Maguindanao del Sur">Maguindanao del Sur</option>
                    <option value="Marinduque">Marinduque</option>
                    <option value="Masbate">Masbate</option>
                    <option value="Metro Manila">Metro Manila</option>
                    <option value="Misamis Occidental">Misamis Occidental</option>
                    <option value="Misamis Oriental">Misamis Oriental</option>
                    <option value="Mountain Province">Mountain Province</option>
                    <option value="Negros Occidental">Negros Occidental</option>
                    <option value="Negros Oriental">Negros Oriental</option>
                    <option value="Northern Samar">Northern Samar</option>
                    <option value="Nueva Ecija">Nueva Ecija</option>
                    <option value="Nueva Vizcaya">Nueva Vizcaya</option>
                    <option value="Occidental Mindoro">Occidental Mindoro</option>
                    <option value="Oriental Mindoro">Oriental Mindoro</option>
                    <option value="Palawan">Palawan</option>
                    <option value="Pampanga">Pampanga[</option>
                    <option value="Pangasinan">Pangasinan[</option>
                    <option value="Quezon">Quezon</option>
                    <option value="Quirino">Quirino</option>
                    <option value="Rizal">Rizal</option>
                    <option value="Romblon">Romblon</option>
                    <option value="Samar">Samar</option>
                    <option value="Sarangani">Sarangani</option>
                    <option value="Siquijor">Siquijor</option>
                    <option value="Sorsogon">Sorsogon</option>
                    <option value="South Cotabato">South Cotabato</option>
                    <option value="Southern Leyte">Southern Leyte</option>
                    <option value="Sultan Kudarat">Sultan Kudarat</option>
                    <option value="Sulu">Sulu</option>
                    <option value="Surigao del Norte">Surigao del Norte</option>
                    <option value="Surigao del Sur">Surigao del Sur</option>
                    <option value="Tarlac">Tarlac</option>
                    <option value="Tawi-Tawi">Tawi-Tawi</option>
                    <option value="Zambales">Zambales</option>
                    <option value="Zamboanga del Norte">Zamboanga del Norte</option>
                    <option value="Zamboanga del Sur">Zamboanga del Sur</option>
                    <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
                    <option value="Others">Others</option>
                  </select>
                </div>

                <div class="col-md-3">
                  <label class="text-black" >Civil Status<span class="text-danger"> *</span></label>
                  <select class="form-select" name="civil_stats" required >
                    <option value=""> -- </option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widow">Widow</option>
                    <option value="Seperated">Seperated</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label class="text-black" >Religion</label>
                  <input name="religion" type="text" class="form-control"  >
                </div>

                <div class="col-md-3">
                  <label class="text-black" >Blood Type</label>
                  <select class="form-select" name="blood_type" >
                    <option value=""> -- </option>
                    <option value="O +">O +</option>
                      <option value="O -">O -</option>
                      <option value="A +">A +</option>               
                      <option value="A -">A-</option>
                      <option value="B +">B +</option>
                      <option value="B -">B -</option>
                      <option value="AB +">AB +</option>                      
                      <option value="AB -">AB -</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4">
                  <label class="text-black" >PHILHEALTH ID</label>
                  <input name="ph_id" type="text" class="form-control">
                </div>

                <div class="col-md-4">
                  <label class="text-black" >TIN ID</label>
                  <input name="tin_id" type="text" class="form-control" >
                </div>

                <div class="col-md-4">
                  <label class="text-black" >Employment Status</label>
                  <select class="form-select" name="emp_stats"  >
                      <option value="Employment Status">--</option>
                      <option value="Contract Employee">Contract Employee</option>
                      <option value="Full-Time Employee">Full-Time Employee</option>
                      <option value="Independent Contractor">Independent Contractor</option>               
                      <option value="Part-Time Employee">Part-Time Employee</option>
                      <option value="Self-Employed">Self-Employed</option>
                      <option value="Temporary or Seasonal Employee">Temporary or Seasonal Employee</option>
                      <option value="Unemployed">Unemployed</option>                      
                      <option value="Volunteer">Volunteer</option>
                      <option value="Retired">Retired</option>   
                      <option value="Student">Student</option>                  
                      <option value="others">others</option>
                      </select>
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-3">
                  <label class="text-black" >Educational Attainment</label>
                  <input name="educ_attainment" type="text" class="form-control" >
                </div>
                <div class="col-md-3">
                  <label class="text-black" >Emergency Contact Person<span class="text-danger"> *</span></label>
                  <input name="emergency_contact_person" type="text" class="form-control" required>
                </div>

                <div class="col-md-3">
                  <label class="text-black" >Emergency Contact Number<span class="text-danger"> *</span></label>
                  <input name="emergency_contact_no" min="11" max="11" Placeholder="09xxxxxxxxx" type="number" class="form-control" required>
                </div>

                <div class="col-md-3">
                  <label class="text-black" >Valid ID<span class="text-danger"> *</span></label>
                  <select class="form-select" name="valid_id" required>
                    <option value=""> -- </option>
                    <option value="SSS">SSS</option>
                    <option value="PHILHEALTH">PHILHEALTH</option>
                    <option value="Pag-ibig">Pag-ibig</option>
                    <option value="UMID">UMID</option>
                    <option value="UMID">Driver's License</option>
                    <option value="UMID">Voter's ID</option>
                    <option value="UMID">Barangay ID</option>
                  </select>
                </div>

              </div>
              <div class="row form-group">
                
                <div class="col-md-3">
                  <label class="text-black">Valid ID Number<span class="text-danger"> *</span></label>
                  <input name="id_number" type="text" class="form-control" required>
                </div>

                <div class="col-md-3">
                  <label class="text-black">Email Address<span class="text-danger"> *</span></label>
                  <input name="email_add" type="email" class="form-control" required>
                </div>

                <div class="col-md-3">
                  <label class="text-black">Upload 2x2 Picture<span class="text-danger"> *</span></label>
                  <input name="file_image" type="file" class="form-control" required>
                  <span class="text-danger">Image file type only.</span>
                </div>

                <div class="col-md-3">
                  <label class="text-black">Upload Birth Cirtificate<span class="text-danger"> *</span></label>
                  <input name="file_mc" type="file" class="form-control" required>
                  <span class="text-danger">Allowed PDF File only.</span>
                </div>
              </div>

              <br/>
              <hr/>
              <h2>Create User Account</h2>
              <br/>

              <div class="row form-group">
                <div class="col-md-4">
                  <label class="text-black" >Username<span class="text-danger"> *</span></label>
                  <input name="username" type="text" class="form-control" required>
                </div>

                <div class="col-md-4">
                  <label class="text-black" >Password<span class="text-danger"> *</span></label>
                  <input name="password" type="password" class="form-control" required>
                </div>

                <div class="col-md-4">
                  <label class="text-black" >Confirm Password<span class="text-danger"> *</span></label>
                  <input name="confirm_password" type="password" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input name="register" type="submit" value="Register" class="btn btn-primary text-white">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <?php include_once("footer.php"); ?>
    

    </div> <!-- .site-wrap -->
  
    <?php include_once("script.php"); ?>
</body>
</html>