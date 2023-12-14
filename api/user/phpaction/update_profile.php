<?php
    error_reporting(0);
    include('../dbconn.php');
    include('../session.php'); 
    if (isset($_POST['update_profile'])){
        $id= mysqli_real_escape_string($conn, $_POST['id']);
        $fname= mysqli_real_escape_string($conn, $_POST['fname']);
        $mname= mysqli_real_escape_string($conn,$_POST['mname']);
        $lname= mysqli_real_escape_string($conn,$_POST['lname']);
        $dob= mysqli_real_escape_string($conn, $_POST['dob']);
        $b_place= mysqli_real_escape_string($conn, $_POST['b_place']);
        $age= mysqli_real_escape_string($conn,$_POST['age']);
        $sex= mysqli_real_escape_string($conn,$_POST['sex']);
        $contact_no= mysqli_real_escape_string($conn, $_POST['contact_no']);
        $address_blk= mysqli_real_escape_string($conn,$_POST['address_blk']);
        $address_municipality= mysqli_real_escape_string($conn, $_POST['address_municipality']);
        $address_province= mysqli_real_escape_string($conn,$_POST['address_province']);
        $civil_stats= mysqli_real_escape_string($conn,$_POST['civil_stats']);
        $religion= mysqli_real_escape_string($conn, $_POST['religion']);
        $blood_type= mysqli_real_escape_string($conn,$_POST['blood_type']);
        $ph_id= mysqli_real_escape_string($conn,$_POST['ph_id']);
        $tin_id= mysqli_real_escape_string($conn,$_POST['tin_id']);
        $emp_stats= mysqli_real_escape_string($conn,$_POST['emp_stats']);
        $educ_attainment= mysqli_real_escape_string($conn,$_POST['educ_attainment']);
        $emergency_contact_person= mysqli_real_escape_string($conn,$_POST['emergency_contact_person']);
        $emergency_contact_no= mysqli_real_escape_string($conn,$_POST['emergency_contact_no']);
        $valid_id= mysqli_real_escape_string($conn,$_POST['valid_id']);
        $id_number= mysqli_real_escape_string($conn,$_POST['id_number']);
        $email_add= mysqli_real_escape_string($conn,$_POST['email_add']);
        $disabality= mysqli_real_escape_string($conn,$_POST['disabality']);

        $access_Type = $_SESSION['access_type'];
        if($access_Type == 'PWD'){
            $sql = "UPDATE pwd_db SET 
            first_name = '$fname',
            middle_name = '$mname',
            last_name = '$lname',
            dob = '$dob',
            age = '$age',
            gender = '$sex',
            birth_place = '$b_place',
            civil_status = '$civil_stats',
            blood_type = '$blood_type',
            ph_id = '$ph_id',
            tin_id = '$tin_id',
            religion = '$religion',
            contact_number = '$contact_no',
            email_address = '$email_add',
            province = '$address_province',
            city_town = '$address_municipality',
            address = '$address_blk',
            educational_attainment = '$educ_attainment',
            employment_status = '$emp_stats',
            contact_person = '$emergency_contact_person',
            contact_person_no = '$emergency_contact_no',
            valid_id = '$valid_id',
            id_number = '$id_number',
            disability = '$disabality'
            WHERE pwd_id = '$id'";
        }else{
            $sql = "UPDATE sc_db SET 
            first_name = '$fname',
            middle_name = '$mname',
            last_name = '$lname',
            dob = '$dob',
            age = '$age',
            gender = '$sex',
            birth_place = '$b_place',
            civil_status = '$civil_stats',
            blood_type = '$blood_type',
            ph_id = '$ph_id',
            tin_id = '$tin_id',
            religion = '$religion',
            contact_number = '$contact_no',
            email_address = '$email_add',
            province = '$address_province',
            city_town = '$address_municipality',
            address = '$address_blk',
            educational_attainment = '$educ_attainment',
            employment_status = '$emp_stats',
            contact_person = '$emergency_contact_person',
            contact_person_no = '$emergency_contact_no',
            valid_id = '$valid_id',
            id_number = '$id_number'
            WHERE sc_id = '$id'";
        }
        

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = 'Profile updated successfully!';
            ?>
            <script>
                window.location = "../index.php";
            </script>
            <?php
        } else {
            $_SESSION['error'] = 'Error updating record!';
            ?>
            <script>
                window.location = "../index.php";
            </script>
            <?php
        }
    }
?>