<?php
    include('../../dbconn.php');
    include('../session.php'); 

    if (isset($_POST['update_pass_btn'])){
        $id= mysqli_real_escape_string($conn,$_POST['id']);
        $old_password= mysqli_real_escape_string($conn,$_POST['old_password']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);
        $confirm_password= mysqli_real_escape_string($conn,$_POST['confirm_password']);

        $query = "SELECT * FROM admin_db WHERE admin_id = '$id'";
        $result = mysqli_query($conn, $query);
        $row_info = mysqli_fetch_assoc($result);
        $admin_password = $row_info['password'];

        if($old_password != $admin_password){
            $_SESSION['error'] = 'Old Password are not match on the database';
            ?>
            <script>
                window.location = "../dashboard.php";
            </script>
            <?php
        }else{
            if($password != $confirm_password){
                $_SESSION['error'] = 'Password and Confirm Password does not match!';
                ?>
                <script>
                    window.location = "../dashboard.php";
                </script>
                <?php
            }else{
                $sql = "UPDATE admin_db SET password='".$password."' WHERE admin_id=".$id; 

                if ($conn->query($sql)) {
                    $_SESSION['success'] = 'Password Changed Successfully';
                    ?>
                    <script>
                        window.location.href = "../dashboard.php";
                    </script>
                    <?php
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    $_SESSION['error'] = 'Error!';
                    ?>
                    <script>
                        window.location.href = "../dashboard.php";
                    </script>
                    <?php
                }
            }
        }



    }

?>