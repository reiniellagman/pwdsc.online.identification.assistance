<?php
    include('../../dbconn.php');
    include('../session.php'); 
    if (isset($_POST['senior_pwd_status'])){
        $sc_id= mysqli_real_escape_string($conn, $_POST['sc_id']);
        $status= mysqli_real_escape_string($conn, $_POST['status']);

        $query = "SELECT * FROM sc_db WHERE sc_id=".$sc_id;
        $result = mysqli_query($conn, $query);
        $row_info = mysqli_fetch_assoc($result);

        $emails = $row_info['email_address'];
        $app_pass = "hbxrrhvidjepkgvr";
        $email_sender = "ehap@nha.gov.ph";

        require_once ("../../phpmailer/class.phpmailer.php");
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
        $Correo->Subject = "Application update for Senior Citizens Identification Card request";
        $Correo->Body = "<P>Hi good day!</P>
                        <P>We would like to inform you that your application for PWD Identification Card request has been ".$status."</P>
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
                        <P>*** This is a system generated message. DO NOT REPLY TO THIS EMAIL.***</P>";

        $Correo->IsHTML (true);

        $sql = "UPDATE sc_db SET status='".$status."' WHERE sc_id=".$sc_id; 
        
        if ($conn->query($sql) === TRUE & $Correo->Send()) {
            $_SESSION['success'] = 'Status updated successfully!';
            ?>
            <script>
                window.location = "../senior.php";
            </script>
            <?php
        } else {
            $_SESSION['error'] = 'Error updating record!';
            ?>
            <script>
                window.location = "../senior.php";
            </script>
            <?php
        }
    }
?>