<?php
    // error_reporting(0);
    include('../dbconn.php');
    include('../session.php'); 
    if (isset($_POST['submit_file'])){
        $username= mysqli_real_escape_string($conn,$_POST['username']);
        
        $files_image = $_FILES['file'];
        $file_name_image=$_FILES['file']['name'];
        $file_size_image=$_FILES['file']['size'];
        $file_error_image=$_FILES['file']['error'];
        $file_temp_loc_image=$_FILES['file']['tmp_name'];
        $file_store_image = "../../uploaded_file/File/".$file_name_image; // file directory for saving
        $file_directory = "../uploaded_file/File/".$file_name_image; // file directory for saving

        $fileActualExt_image = strtolower(substr($file_name_image, strpos($file_name_image,'.'), strlen($file_name_image)-1)); //get the extention in lower case

        $allow = array('.pdf'); // only allowed extention

        if (in_array($fileActualExt_image, $allow)){ // if the extention are within the allow extention, it will proceed on checking if there's error on file
            if($file_error_image === 0){ // if the file has no error it will proceed to uploading the file to the designated directory
                if(move_uploaded_file($file_temp_loc_image, $file_store_image)){ // if the file is successfully uploaded to the directory, data will save to DB
                    
                    $query_image = "UPDATE uploaded_file SET
                    file_name = '$file_name_image',
                    file_directory = '$file_directory'
                    WHERE username = '$username'
                    AND file_type = '2'";
                    if ($conn->query($query_image) === TRUE) {
                        $_SESSION['success'] = 'Successfully Change File Records!';
                        ?>
                        <script>
                            window.location = "../index.php";
                        </script>
                        <?php
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                        ?>
                        <script>
                            alert('Error in saving!');
                        </script>
                        <?php
                    }
                }
                else{
                    $_SESSION['error'] = 'Unable to Upload Image!';
                    ?>
                    <script>
                        window.location = '../index.php';  
                    </script>
                    <?php
                }
            }else{
                $_SESSION['error'] = 'Unable to Upload Image!';
                ?>
                <script>
                    window.location = '../index.php.php';  
                </script>
                <?php
            }
        }else{
            $_SESSION['error'] = 'File type is not supported!';
            ?>
            <script>
                window.location = '../index.php';  
            </script>
            <?php
        }

    }
?>