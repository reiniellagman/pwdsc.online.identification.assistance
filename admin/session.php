<?php
session_start(); 

if(!isset($_SESSION['id'])){
    error_reporting(0);
    ?>
    <script>
        window.location = "../login.php";
    </script>
    <?php
}else{

    $session_id=$_SESSION['id'];
    $access_Type = $_SESSION['access_type'];

    if($access_Type == 'ADMIN'){
        $query = "SELECT * FROM admin_db WHERE admin_id = '$session_id'";
        $result = mysqli_query($conn, $query);
        while($row_info = mysqli_fetch_assoc($result)) {
            $username = $row_info['username'];
            $_SESSION['username'] = $username;
        }
    }
    else{
        if(session_destroy()) {
            ?>
            <script>
                window.location = "../login.php";
            </script>
            <?php
        }
    }
}
?>