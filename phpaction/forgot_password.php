<?php
session_start();
include('../dbconn.php');

if (isset($_POST['forgot_pass'])){
    $email= mysqli_real_escape_string($conn,$_POST['email']);

    $pwd_user="SELECT*FROM pwd_db WHERE email_address = '$email'";
    $pwd_result = mysqli_query($conn, $pwd_user);
    $row_info = mysqli_fetch_assoc($pwd_result);
    $pwd_email_address = $row_info['email_address'];
    $pwd_id = $row_info['pwd_id'];

    $sc_user="SELECT*FROM sc_db WHERE email_address = '$email'";
    $sc_result = mysqli_query($conn, $sc_user);
    $row_info = mysqli_fetch_assoc($sc_result);
    $sc_email_address = $row_info['email_address'];
    $sc_id = $row_info['sc_id'];

    // script for shuffled password
    $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890!@#$%^&*()";

    $newpassword = substr(str_shuffle($string), 0, 8);

    if(mysqli_num_rows($pwd_result) > 0){

        $emails = $pwd_email_address;
        $app_pass = "hbxrrhvidjepkgvr";
        $email_sender = "ehap@nha.gov.ph";

        require_once ("../phpmailer/class.phpmailer.php");
        $Correo = new PHPMailer();
        $Correo->IsSMTP();
        $Correo->SMTPAuth = true;
        $Correo->SMTPSecure = "tls";
        $Correo->Host = "smtp.gmail.com";
        $Correo->Port = 587;
        $Correo->Username = "$email_sender";
        $Correo->Password = "$app_pass";
        $Correo->SetFrom("$email_sender","De Yo");
        $Correo->FromName = "No-Reply";
        $Correo->AddAddress("$emails");
        $Correo->Subject = "New Password Request";
        $Correo->Body = "<P>Hi good day!</P>
                        <P>You request for new password. Your new password is ".$newpassword."</P>
                        <P>For more information, please visit 'https://pwdsc.000webhostapp.com/' and just login using your account.</P>
                        <P></P>
                        <P>Thank you!</P>
                        <P></P>
                        <P>Best regards,</P>
                        <P>PWD SC IDentification Card Administration</P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P>*** This is a system generated message. DO NOT REPLY TO THIS EMAIL.***</P>";

        $Correo->IsHTML (true);

        $sql = "UPDATE pwd_db SET password='".$newpassword."' WHERE pwd_id=".$pwd_id; 

        if ($conn->query($sql) === TRUE & $Correo->Send()) {
            $_SESSION['success'] = 'New Password has been sent to your email! !';
            ?>
            <script>
                window.location.href = "../login.php";
            </script>
            <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $_SESSION['error'] = 'Error!';
            ?>
            <script>
                window.location.href = "../login.php";
            </script>
            <?php
        }

    }elseif(mysqli_num_rows($sc_result) > 0){
        $emails = $sc_email_address;
        $app_pass = "hbxrrhvidjepkgvr";
        $email_sender = "ehap@nha.gov.ph";

        require_once ("../phpmailer/class.phpmailer.php");
        $Correo = new PHPMailer();
        $Correo->IsSMTP();
        $Correo->SMTPAuth = true;
        $Correo->SMTPSecure = "tls";
        $Correo->Host = "smtp.gmail.com";
        $Correo->Port = 587;
        $Correo->Username = "$email_sender";
        $Correo->Password = "$app_pass";
        $Correo->SetFrom("$email_sender","De Yo");
        $Correo->FromName = "No-Reply";
        $Correo->AddAddress("$emails");
        $Correo->Subject = "New Password Request";
        $Correo->Body = "<P>Hi good day!</P>
                        <P>You request for new password. Your new password is ".$newpassword."</P>
                        <P>For more information, please visit 'https://pwdsc.000webhostapp.com/' and just login using your account.</P>
                        <P></P>
                        <P>Thank you!</P>
                        <P></P>
                        <P>Best regards,</P>
                        <P>PWD SC IDentification Card Administration</P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P></P>
                        <P>*** This is a system generated message. DO NOT REPLY TO THIS EMAIL.***</P>";

        $Correo->IsHTML (true);

        $sql = "UPDATE sc_db SET password='".$newpassword."' WHERE sc_id=".$sc_id; 

        if ($conn->query($sql) === TRUE & $Correo->Send()) {
            $_SESSION['success'] = 'New Password has been sent to your email! !';
            ?>
            <script>
                window.location.href = "../login.php";
            </script>
            <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $_SESSION['error'] = 'Error!';
            ?>
            <script>
                window.location.href = "../login.php";
            </script>
            <?php
        }
    }else{
        $_SESSION['error'] = 'Your email is not registered on the system';
        ?>
            <script>
                window.location.href = "../login.php";
            </script>
        <?php
    }
}
?>