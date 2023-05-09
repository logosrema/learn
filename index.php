<?php

// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Generate array of 5 random numbers
$numbers = array();

for ($i = 0; $i < 5; $i++) {
    $numbers[$i] = rand(1, 100); // change the range as per your need
}

// Insert into database every 60 seconds
while (true) {
    // Convert array to comma-separated string
    $values = implode(",", $numbers);
    
    // Insert into database
    $sql = "INSERT INTO numbers (values) VALUES ('$values')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
    
    // Wait for 60 seconds
    sleep(60);
}
