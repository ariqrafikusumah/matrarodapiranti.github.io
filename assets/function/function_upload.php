<?php
// Include the database configuration file
include '../conf/config.php';
$statusMsg = '';

// File upload path
$targetDir = "../uploads/";
$fileName = basename($_FILES["file1"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file1"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','xls','xlm','xlms','xlsm','doc','docx','docs','rar','zip','exe');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath)){
            // Insert file name into database
            $insert = $koneksi->query("INSERT into tb_input ( input_id, user_id, email, file1, status_1, status_2, status_3, status_4, status_5, status_6, status_7, date) VALUES ('$fileName','$input_id','$user_id','$email','$status_1','$status_2','$status_3','$status_4','$status_5','$status_6','$status_7','$date'");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>