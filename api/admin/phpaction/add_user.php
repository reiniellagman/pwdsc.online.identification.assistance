<?php
    include('../../dbconn.php');
    include('../session.php'); 
    if (isset($_POST['add_user_btn'])){
        $username= mysqli_real_escape_string($conn,$_POST['username']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);
        $confirm_password= mysqli_real_escape_string($conn,$_POST['confirm_password']);

        $pwd_duplicate="SELECT*FROM pwd_db WHERE username = '$username'";
        $pwd_result = mysqli_query($conn, $pwd_duplicate);

        $sc_duplicate="SELECT*FROM sc_db WHERE username = '$username'";
        $sc_result = mysqli_query($conn, $sc_duplicate);

        $admin_duplicate="SELECT*FROM admin_db WHERE username = '$username'";
        $admin_result = mysqli_query($conn, $admin_duplicate);

        if(mysqli_num_rows($pwd_result)>0 || mysqli_num_rows($sc_result)>0 || mysqli_num_rows($admin_result)>0){
            $_SESSION['error'] = 'Username already in used!';
            ?>
            <script>
                window.location = "../user_mngmnt.php";
            </script>
            <?php
        }else{
            if($password != $confirm_password){
                $_SESSION['error'] = 'password does not match!';
                ?>
                <script>
                    window.location = "../user_mngmnt.php";
                </script>
                <?php
            }else{
                $query = "INSERT
                INTO admin_db (
                    username,
                    password) VALUES (
                        '$username',
                        '$password')";
                if ($conn->query($query) === TRUE) {
                    $_SESSION['success'] = 'User Registered Sucessfully!';
                    ?>
                    <script>
                        window.location.href = "../user_mngmnt.php";
                    </script>
                    <?php
                } else {
                    echo "Error: " . $query . "<br>" . $conn->error;
                    $_SESSION['success'] = 'Error!';
                    ?>
                    <script>
                        window.location.href = "../user_mngmnt.php";
                    </script>
                    <?php
                }
            }
        }
       
    }
?>