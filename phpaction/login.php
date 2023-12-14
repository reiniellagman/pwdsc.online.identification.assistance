<?php
session_start();
include('../dbconn.php');

if (isset($_POST['login_btn'])){
    $username= mysqli_real_escape_string($conn,$_POST['username']);
    $password= mysqli_real_escape_string($conn,$_POST['password']);

    $pwd_user="SELECT*FROM pwd_db WHERE username = '$username'";
    $pwd_result = mysqli_query($conn, $pwd_user);
    while($row_info = mysqli_fetch_assoc($pwd_result)) {
        $pwd_password = $row_info['password'];
        $pwd_id = $row_info['pwd_id'];
    }

    $sc_user="SELECT*FROM sc_db WHERE username = '$username'";
    $sc_result = mysqli_query($conn, $sc_user);
    while($row_info = mysqli_fetch_assoc($sc_result)) {
        $sc_password = $row_info['password'];
        $sc_id = $row_info['sc_id'];
    }

    $admin_user="SELECT*FROM admin_db WHERE username = '$username'";
    $admin_result = mysqli_query($conn, $admin_user);
    while($row_info = mysqli_fetch_assoc($admin_result)) {
        $admin_password = $row_info['password'];
        $admin_id = $row_info['admin_id'];
    }

    $_SESSION['username']=$username;
    $_SESSION['password']=$password;

    if(mysqli_num_rows($pwd_result) > 0){
        if($pwd_password != $password){
            $_SESSION['error'] = 'Incorrect Password!';
            ?>
            <script>
                window.location = "../login.php";
            </script>
            <?php
        }else{
            $_SESSION['success'] = 'Welcome Back!';
            $_SESSION['id'] = $pwd_id;
            $_SESSION['access_type'] = "PWD";
            ?>
            <script>
                window.location = "../user/index.php";
            </script>
            <?php
        }
    }elseif(mysqli_num_rows($sc_result) > 0){
        if($sc_password != $password){
            $_SESSION['error'] = 'Incorrect Password!';
            ?>
            <script>
                window.location = "../login.php";
            </script>
            <?php
        }else{
            $_SESSION['success'] = 'Welcome Back!';
            $_SESSION['id'] = $sc_id;
            $_SESSION['access_type'] = "SC";
            ?>
                <script>
                    window.location = "../user/index.php";
                </script>
            <?php
        }
    }elseif(mysqli_num_rows($admin_result) > 0){
        if($admin_password != $password){
            $_SESSION['error'] = 'Incorrect Password!';
            ?>
            <script>
                window.location = "../login.php";
            </script>
            <?php
        }else{
            $_SESSION['success'] = 'Welcome Back!';
            $_SESSION['id'] = $admin_id;
            $_SESSION['access_type'] = "ADMIN";
            ?>
                <script>
                    window.location = "../admin/dashboard.php";
                </script>
            <?php
        }
    }else{
        $_SESSION['error'] = 'User is not registered';
        ?>
        <script>
            window.location = "../login.php";
        </script>
        <?php
    }
}
?>