<?php
    include('../../dbconn.php');
    include('../session.php'); 
    if (isset($_POST['edit_user_btn'])){
        $admin_id= mysqli_real_escape_string($conn,$_POST['admin_id']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);

        $sql = "UPDATE admin_db SET password='".$password."' WHERE admin_id=".$admin_id; 
        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = 'User Updated Sucessfully!';
            ?>
            <script>
                window.location.href = "../user_mngmnt.php";
            </script>
            <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $_SESSION['error'] = 'Error!';
            ?>
            <script>
                window.location.href = "../user_mngmnt.php";
            </script>
            <?php
        }
    }
?>