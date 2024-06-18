<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

// Insert data into database
$sql = "INSERT INTO responses (name, email, age) VALUES ('$name', '$email', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('You are tricked!');</script>";
    echo "<h1>You are tricked!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
