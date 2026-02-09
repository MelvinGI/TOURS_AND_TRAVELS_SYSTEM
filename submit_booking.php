<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "counselling session"; 
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("INSERT INTO bookings (first_name, last_name, email, mobile, mode, study_level, study_destination) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $first_name, $last_name, $email, $mobile, $mode, $study_level, $study_destination);
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $mode = $_POST["mode"];
    $study_level = $_POST["study_level"];
    $study_destination = $_POST["study_destination"];
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
        echo "Booking submitted successfully!";
}
?>
