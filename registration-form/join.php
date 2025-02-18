<?php
// Database connection
$servername = "localhost"; 
$username = "root"; 
$password = "itsmeShaurya@47";
$database = "quincydb"; 

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetching values from HTML form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Inserting data into MySQL table
$sql = "INSERT INTO users (username,email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    header("Location: index.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>