<?php
include "../database/Database.php";

$name = $_POST['name'];
$ID = $_POST['ID'];
$email = $_POST['email'];
$department = $_POST['department'];
$employment_status = $_POST['employment_status'];
$accommodation_requests = $_POST['accommodation_requests'];
$file = $_FILES["file"];
if (!isset($file)) {
    die('No file uploaded.');
}
$file_name = $name ."_". $file["name"];
move_uploaded_file(
    // Temp image location
    $file["tmp_name"] ,

    // New image location, __DIR__ is the location of the current PHP file
    __DIR__ . "/files/" . $file_name   
);

if (isset($_POST['name'])) {

    //Insert Query
    $insert= "insert into employee(SeriesNo, name, ID , email, department, employment_status, accommodation_requests, file)
     values ('','$name','$ID', '$email', '$department','$employment_status', '$accommodation_requests','$file_name')"; 
    }

    if($connection->query($insert)){
        header('Location: ../client/successMassage.php');  
       }
       else{
        echo 'Error '.$conn->error;  
       }
?>