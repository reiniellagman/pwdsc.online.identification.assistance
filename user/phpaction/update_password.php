<?php
    include('../../dbconn.php');
    include('../session.php'); 

    if (isset($_POST['update_pass_btn'])){
        $id= mysqli_real_escape_string($conn,$_POST['id']);
        $old_password= mysqli_real_escape_string($conn,$_POST['old_password']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);
        $confirm_password= mysqli_real_escape_string($conn,$_POST['confirm_password']);

        $access_Type = $_SESSION['access_type'];

        if($access_Type == "PWD"){
            $query = "SELECT * FROM pwd_db WHERE pwd_id = '$id'";
            $result = mysqli_query($conn, $query);
            $row_info = mysqli_fetch_assoc($result);
            $pwd_password = $row_info['password'];

            if($old_password != $pwd_password){
                $_SESSION['error'] = 'Old Password are not match on the database';
                ?>
                <script>
                    window.location = "../index.php";
                </script>
                <?php
            }else{
                if($password != $confirm_password){
                    $_SESSION['error'] = 'Password and Confirm Password does not match!';
                    ?>
                    <script>
                        window.location = "../index.php";
                    </script>
                    <?php
                }else{
                    $sql = "UPDATE pwd_db SET password='".$password."' WHERE pwd_id=".$id; 

                    if ($conn->query($sql)) {
                        $_SESSION['success'] = 'Password Changed Successfully';
                        ?>
                        <script>
                            window.location.href = "../index.php";
                        </script>
                        <?php
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        $_SESSION['error'] = 'Error!';
                        ?>
                        <script>
                            window.location.href = "../index.php";
                        </script>
                        <?php
                    }
                }
            }
        }else{
            $query = "SELECT * FROM sc_db WHERE sc_id = '$id'";
            $result = mysqli_query($conn, $query);
            $row_info = mysqli_fetch_assoc($result);
            $ac_password = $row_info['password'];

            if($old_password != $ac_password){
                $_SESSION['error'] = 'Old Password are not match on the database';
                ?>
                <script>
                    window.location = "../index.php";
                </script>
                <?php
            }else{
                if($password != $confirm_password){
                    $_SESSION['error'] = 'Password and Confirm Password does not match!';
                    ?>
                    <script>
                        window.location = "../index.php";
                    </script>
                    <?php
                }else{
                    $sql = "UPDATE sc_db SET password='".$password."' WHERE sc_id=".$id; 

                    if ($conn->query($sql)) {
                        $_SESSION['success'] = 'Password Changed Successfully';
                        ?>
                        <script>
                            window.location.href = "../index.php";
                        </script>
                        <?php
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        $_SESSION['error'] = 'Error!';
                        ?>
                        <script>
                            window.location.href = "../index.php";
                        </script>
                        <?php
                    }
                }
            }
        }
    }
?>