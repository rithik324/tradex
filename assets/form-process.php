<?php
$host = "localhost";
/*$userName = "geniemar_genie";
$password = "Vmtech@2020";
$dbName = "geniemar_genie";*/

$userName = "tradexma_tradex";
$password = "Versatile@2021";
$dbName = "tradexma_tradex";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);
    $datetime = date('Y-m-d H:i:s');
    
    $sql="INSERT INTO contact_form (name, email, mobile, subject, message, created_time) 
    VALUES ('".$name."','".$email."', '".$mobile."', '".$subject."', '".$message."', '".$datetime."')";

    if(!$result = $conn->query($sql)){
        die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        echo "success";
    }

//print_r($_POST);
?>